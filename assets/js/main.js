/**
 * ALORNIX - Main JavaScript File
 * Version: 1.0.0
 * Description: Core functionality for ALORNIX template system
 */

// ========================================
// 1. Global Configuration
// ========================================
const ALORNIX = {
    version: '1.0.0',
    debug: false,
    breakpoints: {
        xs: 0,
        sm: 576,
        md: 768,
        lg: 992,
        xl: 1200,
        xxl: 1400
    },
    animations: {
        duration: 300,
        easing: 'ease-in-out'
    }
};

// ========================================
// 2. Utility Functions
// ========================================
const Utils = {
    // Debounce function for performance
    debounce: function(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    },

    // Throttle function for performance
    throttle: function(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    },

    // Check if element is in viewport
    isInViewport: function(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    },

    // Get current breakpoint
    getCurrentBreakpoint: function() {
        const width = window.innerWidth;
        let current = 'xs';
        for (const [key, value] of Object.entries(ALORNIX.breakpoints)) {
            if (width >= value) current = key;
        }
        return current;
    },

    // Smooth scroll to element
    smoothScroll: function(target, duration = 1000) {
        const targetElement = typeof target === 'string' ? document.querySelector(target) : target;
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

// ========================================
// 3. Navigation Component
// ========================================
class Navigation {
    constructor() {
        this.navbar = document.querySelector('.navbar');
        this.mobileMenuBtn = document.querySelector('#mobile-menu-btn');
        this.mobileMenu = document.querySelector('#mobile-menu');
        this.dropdowns = document.querySelectorAll('.dropdown');
        
        this.init();
    }

    init() {
        this.setupMobileMenu();
        this.setupDropdowns();
        this.setupScrollBehavior();
        this.setupSmoothScroll();
    }

    setupMobileMenu() {
        if (this.mobileMenuBtn && this.mobileMenu) {
            this.mobileMenuBtn.addEventListener('click', () => {
                this.mobileMenu.classList.toggle('hidden');
                this.mobileMenuBtn.classList.toggle('active');
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!this.mobileMenuBtn.contains(e.target) && !this.mobileMenu.contains(e.target)) {
                    this.mobileMenu.classList.add('hidden');
                    this.mobileMenuBtn.classList.remove('active');
                }
            });
        }
    }

    setupDropdowns() {
        this.dropdowns.forEach(dropdown => {
            const trigger = dropdown.querySelector('.dropdown-trigger');
            const menu = dropdown.querySelector('.dropdown-menu');

            if (trigger && menu) {
                trigger.addEventListener('click', (e) => {
                    e.preventDefault();
                    menu.classList.toggle('show');
                });

                // Close dropdown when clicking outside
                document.addEventListener('click', (e) => {
                    if (!dropdown.contains(e.target)) {
                        menu.classList.remove('show');
                    }
                });
            }
        });
    }

    setupScrollBehavior() {
        if (this.navbar) {
            let lastScroll = 0;
            
            window.addEventListener('scroll', Utils.throttle(() => {
                const currentScroll = window.pageYOffset;
                
                // Add/remove scrolled class
                if (currentScroll > 50) {
                    this.navbar.classList.add('navbar-scrolled');
                } else {
                    this.navbar.classList.remove('navbar-scrolled');
                }
                
                // Hide/show navbar on scroll
                if (currentScroll > lastScroll && currentScroll > 100) {
                    this.navbar.classList.add('navbar-hidden');
                } else {
                    this.navbar.classList.remove('navbar-hidden');
                }
                
                lastScroll = currentScroll;
            }, 100));
        }
    }

    setupSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    Utils.smoothScroll(target);
                }
            });
        });
    }
}

// ========================================
// 4. Slider Component
// ========================================
class Slider {
    constructor(element, options = {}) {
        this.slider = typeof element === 'string' ? document.querySelector(element) : element;
        if (!this.slider) return;

        this.options = {
            autoplay: options.autoplay || false,
            autoplaySpeed: options.autoplaySpeed || 5000,
            dots: options.dots || true,
            arrows: options.arrows || true,
            infinite: options.infinite || true,
            speed: options.speed || 500,
            slidesToShow: options.slidesToShow || 1,
            slidesToScroll: options.slidesToScroll || 1,
            responsive: options.responsive || []
        };

        this.currentSlide = 0;
        this.slides = this.slider.querySelectorAll('.slide');
        this.totalSlides = this.slides.length;
        this.autoplayTimer = null;

        this.init();
    }

    init() {
        this.createControls();
        this.updateSlider();
        this.setupEventListeners();
        if (this.options.autoplay) {
            this.startAutoplay();
        }
    }

    createControls() {
        // Create arrows
        if (this.options.arrows) {
            const prevBtn = document.createElement('button');
            prevBtn.className = 'slider-prev';
            prevBtn.innerHTML = '←';
            prevBtn.addEventListener('click', () => this.prevSlide());

            const nextBtn = document.createElement('button');
            nextBtn.className = 'slider-next';
            nextBtn.innerHTML = '→';
            nextBtn.addEventListener('click', () => this.nextSlide());

            this.slider.appendChild(prevBtn);
            this.slider.appendChild(nextBtn);
        }

        // Create dots
        if (this.options.dots) {
            const dotsContainer = document.createElement('div');
            dotsContainer.className = 'slider-dots';

            for (let i = 0; i < this.totalSlides; i++) {
                const dot = document.createElement('button');
                dot.className = 'slider-dot';
                dot.addEventListener('click', () => this.goToSlide(i));
                dotsContainer.appendChild(dot);
            }

            this.slider.appendChild(dotsContainer);
            this.dots = dotsContainer.querySelectorAll('.slider-dot');
        }
    }

    updateSlider() {
        // Update slides
        this.slides.forEach((slide, index) => {
            slide.style.transform = `translateX(${(index - this.currentSlide) * 100}%)`;
        });

        // Update dots
        if (this.dots) {
            this.dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentSlide);
            });
        }
    }

    nextSlide() {
        if (this.currentSlide < this.totalSlides - 1) {
            this.currentSlide++;
        } else if (this.options.infinite) {
            this.currentSlide = 0;
        }
        this.updateSlider();
        this.resetAutoplay();
    }

    prevSlide() {
        if (this.currentSlide > 0) {
            this.currentSlide--;
        } else if (this.options.infinite) {
            this.currentSlide = this.totalSlides - 1;
        }
        this.updateSlider();
        this.resetAutoplay();
    }

    goToSlide(index) {
        this.currentSlide = index;
        this.updateSlider();
        this.resetAutoplay();
    }

    startAutoplay() {
        this.autoplayTimer = setInterval(() => {
            this.nextSlide();
        }, this.options.autoplaySpeed);
    }

    stopAutoplay() {
        clearInterval(this.autoplayTimer);
    }

    resetAutoplay() {
        if (this.options.autoplay) {
            this.stopAutoplay();
            this.startAutoplay();
        }
    }

    setupEventListeners() {
        // Touch support
        let touchStartX = 0;
        let touchEndX = 0;

        this.slider.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });

        this.slider.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            this.handleSwipe();
        });

        const handleSwipe = () => {
            if (touchEndX < touchStartX - 50) {
                this.nextSlide();
            }
            if (touchEndX > touchStartX + 50) {
                this.prevSlide();
            }
        };

        // Pause on hover
        this.slider.addEventListener('mouseenter', () => {
            if (this.options.autoplay) {
                this.stopAutoplay();
            }
        });

        this.slider.addEventListener('mouseleave', () => {
            if (this.options.autoplay) {
                this.startAutoplay();
            }
        });
    }
}

// ========================================
// 5. Animation Observer
// ========================================
class AnimationObserver {
    constructor() {
        this.elements = document.querySelectorAll('[data-animate]');
        this.init();
    }

    init() {
        if ('IntersectionObserver' in window) {
            const options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const element = entry.target;
                        const animation = element.dataset.animate;
                        const delay = element.dataset.animateDelay || 0;

                        setTimeout(() => {
                            element.classList.add(animation);
                            element.classList.add('animated');
                        }, delay);

                        observer.unobserve(element);
                    }
                });
            }, options);

            this.elements.forEach(element => {
                observer.observe(element);
            });
        } else {
            // Fallback for browsers that don't support IntersectionObserver
            this.elements.forEach(element => {
                const animation = element.dataset.animate;
                element.classList.add(animation);
                element.classList.add('animated');
            });
        }
    }
}

// ========================================
// 6. Form Validation
// ========================================
class FormValidator {
    constructor(form) {
        this.form = typeof form === 'string' ? document.querySelector(form) : form;
        if (!this.form) return;

        this.fields = this.form.querySelectorAll('[required]');
        this.init();
    }

    init() {
        this.form.addEventListener('submit', (e) => {
            e.preventDefault();
            if (this.validateForm()) {
                this.submitForm();
            }
        });

        this.fields.forEach(field => {
            field.addEventListener('blur', () => {
                this.validateField(field);
            });

            field.addEventListener('input', () => {
                this.clearError(field);
            });
        });
    }

    validateForm() {
        let isValid = true;
        this.fields.forEach(field => {
            if (!this.validateField(field)) {
                isValid = false;
            }
        });
        return isValid;
    }

    validateField(field) {
        const value = field.value.trim();
        const type = field.type;
        let isValid = true;

        // Required field
        if (field.hasAttribute('required') && !value) {
            this.showError(field, 'This field is required');
            return false;
        }

        // Email validation
        if (type === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                this.showError(field, 'Please enter a valid email address');
                return false;
            }
        }

        // Phone validation
        if (type === 'tel' && value) {
            const phoneRegex = /^[\d\s\-\+\(\)]+$/;
            if (!phoneRegex.test(value)) {
                this.showError(field, 'Please enter a valid phone number');
                return false;
            }
        }

        // Min length validation
        if (field.hasAttribute('minlength')) {
            const minLength = parseInt(field.getAttribute('minlength'));
            if (value.length < minLength) {
                this.showError(field, `Minimum ${minLength} characters required`);
                return false;
            }
        }

        return isValid;
    }

    showError(field, message) {
        const errorElement = field.parentElement.querySelector('.error-message');
        if (errorElement) {
            errorElement.textContent = message;
        } else {
            const error = document.createElement('span');
            error.className = 'error-message';
            error.textContent = message;
            field.parentElement.appendChild(error);
        }
        field.classList.add('error');
    }

    clearError(field) {
        const errorElement = field.parentElement.querySelector('.error-message');
        if (errorElement) {
            errorElement.remove();
        }
        field.classList.remove('error');
    }

    submitForm() {
        // Show loading state
        const submitBtn = this.form.querySelector('[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Sending...';
        submitBtn.disabled = true;

        // Simulate form submission
        setTimeout(() => {
            // Reset form
            this.form.reset();
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
            
            // Show success message
            this.showSuccess('Form submitted successfully!');
        }, 2000);
    }

    showSuccess(message) {
        const successElement = document.createElement('div');
        successElement.className = 'success-message';
        successElement.textContent = message;
        this.form.appendChild(successElement);

        setTimeout(() => {
            successElement.remove();
        }, 5000);
    }
}

// ========================================
// 7. Lazy Loading
// ========================================
class LazyLoader {
    constructor() {
        this.images = document.querySelectorAll('img[data-src]');
        this.init();
    }

    init() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        this.loadImage(img);
                        imageObserver.unobserve(img);
                    }
                });
            });

            this.images.forEach(img => imageObserver.observe(img));
        } else {
            // Fallback for browsers that don't support IntersectionObserver
            this.loadAllImages();
        }
    }

    loadImage(img) {
        const src = img.dataset.src;
        if (!src) return;

        img.src = src;
        img.removeAttribute('data-src');
        img.classList.add('loaded');
    }

    loadAllImages() {
        this.images.forEach(img => this.loadImage(img));
    }
}

// ========================================
// 8. Modal Component
// ========================================
class Modal {
    constructor() {
        this.modals = document.querySelectorAll('.modal');
        this.triggers = document.querySelectorAll('[data-modal]');
        this.activeModal = null;
        this.init();
    }

    init() {
        this.triggers.forEach(trigger => {
            trigger.addEventListener('click', (e) => {
                e.preventDefault();
                const modalId = trigger.dataset.modal;
                this.openModal(modalId);
            });
        });

        this.modals.forEach(modal => {
            // Close button
            const closeBtn = modal.querySelector('.modal-close');
            if (closeBtn) {
                closeBtn.addEventListener('click', () => this.closeModal());
            }

            // Close on backdrop click
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    this.closeModal();
                }
            });
        });

        // Close on ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && this.activeModal) {
                this.closeModal();
            }
        });
    }

    openModal(modalId) {
        const modal = document.getElementById(modalId);
        if (!modal) return;

        this.activeModal = modal;
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
    }

    closeModal() {
        if (!this.activeModal) return;

        this.activeModal.classList.remove('show');
        document.body.style.overflow = '';
        this.activeModal = null;
    }
}

// ========================================
// 9. Counter Animation
// ========================================
class CounterAnimation {
    constructor() {
        this.counters = document.querySelectorAll('[data-counter]');
        this.init();
    }

    init() {
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            });

            this.counters.forEach(counter => observer.observe(counter));
        } else {
            this.counters.forEach(counter => this.animateCounter(counter));
        }
    }

    animateCounter(element) {
        const target = parseInt(element.dataset.counter);
        const duration = parseInt(element.dataset.duration) || 2000;
        const start = 0;
        const increment = target / (duration / 16);
        let current = start;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current).toLocaleString();
        }, 16);
    }
}

// ========================================
// 10. Dark Mode Toggle
// ========================================
class DarkMode {
    constructor() {
        this.toggle = document.querySelector('#dark-mode-toggle');
        this.body = document.body;
        this.init();
    }

    init() {
        // Check for saved preference
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            this.body.dataset.theme = savedTheme;
        } else if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            this.body.dataset.theme = 'dark';
        }

        if (this.toggle) {
            this.toggle.addEventListener('click', () => {
                this.toggleTheme();
            });
        }
    }

    toggleTheme() {
        const currentTheme = this.body.dataset.theme;
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        this.body.dataset.theme = newTheme;
        localStorage.setItem('theme', newTheme);
    }
}

// ========================================
// 11. Initialize Everything
// ========================================
document.addEventListener('DOMContentLoaded', function() {
    // Initialize components
    const navigation = new Navigation();
    const animationObserver = new AnimationObserver();
    const lazyLoader = new LazyLoader();
    const modal = new Modal();
    const counterAnimation = new CounterAnimation();
    const darkMode = new DarkMode();

    // Initialize sliders
    document.querySelectorAll('.slider').forEach(slider => {
        new Slider(slider, {
            autoplay: true,
            autoplaySpeed: 5000,
            dots: true,
            arrows: true
        });
    });

    // Initialize forms
    document.querySelectorAll('form[data-validate]').forEach(form => {
        new FormValidator(form);
    });

    // Preloader
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            setTimeout(() => {
                preloader.classList.add('fade-out');
                setTimeout(() => {
                    preloader.remove();
                }, 500);
            }, 500);
        });
    }

    // Back to top button
    const backToTop = document.querySelector('#back-to-top');
    if (backToTop) {
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });

        backToTop.addEventListener('click', () => {
            Utils.smoothScroll('body');
        });
    }

    // Log initialization
    if (ALORNIX.debug) {
        console.log('ALORNIX Template System v' + ALORNIX.version + ' initialized');
        console.log('Current breakpoint:', Utils.getCurrentBreakpoint());
    }
});

// Export for use in other scripts
window.ALORNIX = ALORNIX;
window.AlornixUtils = Utils;