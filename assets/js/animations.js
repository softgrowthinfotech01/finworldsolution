/**
 * ALORNIX Animation Library
 * JavaScript functionality for animations
 */

(function() {
    'use strict';

    // Animation Library Object
    const AlornixAnimations = {
        
        // Configuration
        config: {
            observerThreshold: 0.1,
            observerRootMargin: '0px',
            defaultDuration: 1000,
            defaultEasing: 'ease-out'
        },

        // Initialize all animations
        init: function() {
            this.initScrollAnimations();
            this.initHoverAnimations();
            this.initClickAnimations();
            this.initTextAnimations();
            this.initParallax();
            this.initCounters();
            console.log('AlornixAnimations initialized');
        },

        // Scroll-triggered animations
        initScrollAnimations: function() {
            const animatedElements = document.querySelectorAll('[data-animate]');
            
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const element = entry.target;
                            const animationClass = element.dataset.animate;
                            const delay = element.dataset.animateDelay || 0;
                            
                            setTimeout(() => {
                                element.classList.add(animationClass);
                                element.classList.add('animated');
                            }, delay);
                            
                            // Optional: Stop observing after animation
                            if (element.dataset.animateOnce === 'true') {
                                observer.unobserve(element);
                            }
                        }
                    });
                }, {
                    threshold: this.config.observerThreshold,
                    rootMargin: this.config.observerRootMargin
                });

                animatedElements.forEach(el => observer.observe(el));
            } else {
                // Fallback for browsers without IntersectionObserver
                animatedElements.forEach(el => {
                    el.classList.add(el.dataset.animate);
                });
            }
        },

        // Hover animations
        initHoverAnimations: function() {
            const hoverElements = document.querySelectorAll('[data-hover-animate]');
            
            hoverElements.forEach(element => {
                const animationClass = element.dataset.hoverAnimate;
                
                element.addEventListener('mouseenter', function() {
                    this.classList.add(animationClass);
                });
                
                element.addEventListener('mouseleave', function() {
                    this.classList.remove(animationClass);
                });
            });
        },

        // Click animations
        initClickAnimations: function() {
            const clickElements = document.querySelectorAll('[data-click-animate]');
            
            clickElements.forEach(element => {
                element.addEventListener('click', function() {
                    const animationClass = this.dataset.clickAnimate;
                    this.classList.add(animationClass);
                    
                    // Remove class after animation completes
                    setTimeout(() => {
                        this.classList.remove(animationClass);
                    }, 1000);
                });
            });
        },

        // Text animations (typewriter, etc.)
        initTextAnimations: function() {
            // Typewriter effect
            const typewriterElements = document.querySelectorAll('.typewriter');
            
            typewriterElements.forEach(element => {
                const text = element.textContent;
                const speed = parseInt(element.dataset.speed) || 100;
                element.textContent = '';
                let i = 0;
                
                function typeWriter() {
                    if (i < text.length) {
                        element.textContent += text.charAt(i);
                        i++;
                        setTimeout(typeWriter, speed);
                    }
                }
                
                // Start when visible
                if (this.isElementInViewport(element)) {
                    typeWriter();
                } else {
                    const observer = new IntersectionObserver((entries) => {
                        if (entries[0].isIntersecting) {
                            typeWriter();
                            observer.disconnect();
                        }
                    });
                    observer.observe(element);
                }
            });

            // Text scramble effect
            const scrambleElements = document.querySelectorAll('.text-scramble');
            
            scrambleElements.forEach(element => {
                const originalText = element.textContent;
                const chars = '!<>-_\\/[]{}—=+*^?#________';
                
                element.addEventListener('mouseenter', function() {
                    let iteration = 0;
                    const interval = setInterval(() => {
                        this.textContent = originalText
                            .split('')
                            .map((letter, index) => {
                                if (index < iteration) {
                                    return originalText[index];
                                }
                                return chars[Math.floor(Math.random() * chars.length)];
                            })
                            .join('');
                        
                        if (iteration >= originalText.length) {
                            clearInterval(interval);
                        }
                        iteration += 1 / 3;
                    }, 30);
                });
            });
        },

        // Parallax scrolling
        initParallax: function() {
            const parallaxElements = document.querySelectorAll('[data-parallax]');
            
            if (parallaxElements.length > 0) {
                window.addEventListener('scroll', () => {
                    const scrolled = window.pageYOffset;
                    
                    parallaxElements.forEach(element => {
                        const speed = element.dataset.parallax || 0.5;
                        const yPos = -(scrolled * speed);
                        element.style.transform = `translateY(${yPos}px)`;
                    });
                });
            }
        },

        // Animated counters
        initCounters: function() {
            const counters = document.querySelectorAll('.counter');
            
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.dataset.target;
                    const count = +counter.innerText.replace(/,/g, '');
                    const increment = target / 200;
                    
                    if (count < target) {
                        counter.innerText = this.formatNumber(Math.ceil(count + increment));
                        setTimeout(updateCount, 10);
                    } else {
                        counter.innerText = this.formatNumber(target);
                    }
                };
                
                // Start when visible
                const observer = new IntersectionObserver((entries) => {
                    if (entries[0].isIntersecting) {
                        updateCount();
                        observer.disconnect();
                    }
                });
                observer.observe(counter);
            });
        },

        // Utility: Check if element is in viewport
        isElementInViewport: function(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        },

        // Utility: Format number with commas
        formatNumber: function(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        },

        // Animate element
        animate: function(element, animationClass, duration = 1000) {
            return new Promise((resolve) => {
                element.classList.add(animationClass);
                setTimeout(() => {
                    element.classList.remove(animationClass);
                    resolve();
                }, duration);
            });
        },

        // Chain animations
        animateSequence: async function(animations) {
            for (const animation of animations) {
                await this.animate(animation.element, animation.class, animation.duration);
                if (animation.delay) {
                    await this.delay(animation.delay);
                }
            }
        },

        // Delay utility
        delay: function(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        },

        // Stagger animations
        staggerAnimate: function(elements, animationClass, staggerDelay = 100) {
            elements.forEach((element, index) => {
                setTimeout(() => {
                    element.classList.add(animationClass);
                }, index * staggerDelay);
            });
        },

        // Remove all animations
        removeAnimations: function(element) {
            const animationClasses = [
                'animate-fadeIn', 'animate-fadeOut', 'animate-fadeInUp', 'animate-fadeInDown',
                'animate-fadeInLeft', 'animate-fadeInRight', 'animate-slideInLeft', 'animate-slideInRight',
                'animate-zoomIn', 'animate-zoomOut', 'animate-bounce', 'animate-shake',
                'animate-pulse', 'animate-flip', 'animate-rotate', 'animated'
            ];
            
            animationClasses.forEach(className => {
                element.classList.remove(className);
            });
        },

        // Ripple effect
        createRipple: function(event) {
            const button = event.currentTarget;
            const ripple = document.createElement('span');
            const rect = button.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = event.clientX - rect.left - size / 2;
            const y = event.clientY - rect.top - size / 2;
            
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            
            button.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        },

        // Initialize ripple buttons
        initRippleButtons: function() {
            const buttons = document.querySelectorAll('.ripple-button');
            buttons.forEach(button => {
                button.addEventListener('click', this.createRipple);
            });
        },

        // Morph shapes
        morphShape: function(element, fromPath, toPath, duration = 1000) {
            const path = element.querySelector('path');
            if (!path) return;
            
            path.setAttribute('d', fromPath);
            
            // Simple morph animation
            setTimeout(() => {
                path.style.transition = `d ${duration}ms ease-in-out`;
                path.setAttribute('d', toPath);
            }, 100);
        },

        // Particle animation
        createParticles: function(container, count = 50) {
            for (let i = 0; i < count; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 3 + 's';
                particle.style.animationDuration = (Math.random() * 3 + 2) + 's';
                container.appendChild(particle);
            }
        },

        // 3D card flip
        init3DCards: function() {
            const cards = document.querySelectorAll('.card-3d');
            
            cards.forEach(card => {
                card.addEventListener('click', function() {
                    this.classList.toggle('flipped');
                });
            });
        },

        // Magnetic buttons
        initMagneticButtons: function() {
            const magneticButtons = document.querySelectorAll('.magnetic-button');
            
            magneticButtons.forEach(button => {
                button.addEventListener('mousemove', function(e) {
                    const rect = this.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;
                    
                    this.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.transform = 'translate(0, 0)';
                });
            });
        },

        // Smooth scroll to element
        smoothScrollTo: function(target, duration = 1000) {
            const targetElement = document.querySelector(target);
            if (!targetElement) return;
            
            const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
            const startPosition = window.pageYOffset;
            const distance = targetPosition - startPosition;
            let startTime = null;
            
            function animation(currentTime) {
                if (startTime === null) startTime = currentTime;
                const timeElapsed = currentTime - startTime;
                const run = ease(timeElapsed, startPosition, distance, duration);
                window.scrollTo(0, run);
                if (timeElapsed < duration) requestAnimationFrame(animation);
            }
            
            function ease(t, b, c, d) {
                t /= d / 2;
                if (t < 1) return c / 2 * t * t + b;
                t--;
                return -c / 2 * (t * (t - 2) - 1) + b;
            }
            
            requestAnimationFrame(animation);
        }
    };

    // CSS for ripple effect
    const style = document.createElement('style');
    style.textContent = `
        .ripple-button {
            position: relative;
            overflow: hidden;
        }
        .ripple {
            position: absolute;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.6);
            transform: scale(0);
            animation: ripple-animation 0.6s ease-out;
        }
        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            animation: float-up 3s linear infinite;
        }
        @keyframes float-up {
            to {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }
        .card-3d {
            transform-style: preserve-3d;
            transition: transform 0.6s;
        }
        .card-3d.flipped {
            transform: rotateY(180deg);
        }
        .magnetic-button {
            transition: transform 0.2s ease-out;
        }
    `;
    document.head.appendChild(style);

    // Initialize on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => AlornixAnimations.init());
    } else {
        AlornixAnimations.init();
    }

    // Export to global scope
    window.AlornixAnimations = AlornixAnimations;

})();