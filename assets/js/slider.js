/**
 * ALORNIX Slider Library
 * Complete slider/carousel functionality
 */

class AlornixSlider {
    constructor(element, options = {}) {
        this.slider = typeof element === 'string' ? document.querySelector(element) : element;
        if (!this.slider) return;

        // Default options
        this.options = {
            autoplay: options.autoplay || false,
            autoplaySpeed: options.autoplaySpeed || 5000,
            speed: options.speed || 500,
            dots: options.dots !== undefined ? options.dots : true,
            arrows: options.arrows !== undefined ? options.arrows : true,
            infinite: options.infinite !== undefined ? options.infinite : true,
            slidesToShow: options.slidesToShow || 1,
            slidesToScroll: options.slidesToScroll || 1,
            fade: options.fade || false,
            vertical: options.vertical || false,
            swipe: options.swipe !== undefined ? options.swipe : true,
            pauseOnHover: options.pauseOnHover !== undefined ? options.pauseOnHover : true,
            responsive: options.responsive || [],
            onSlideChange: options.onSlideChange || null,
            onInit: options.onInit || null
        };

        this.currentSlide = 0;
        this.slideCount = 0;
        this.autoplayTimer = null;
        this.isAnimating = false;
        this.touchStartX = 0;
        this.touchEndX = 0;

        this.init();
    }

    init() {
        this.setupSlider();
        this.createControls();
        this.bindEvents();
        this.updateResponsive();
        
        if (this.options.autoplay) {
            this.startAutoplay();
        }

        if (this.options.onInit) {
            this.options.onInit.call(this);
        }
    }

    setupSlider() {
        // Add necessary classes
        this.slider.classList.add('alornix-slider');
        
        // Get slides
        this.slides = this.slider.querySelectorAll('.slide');
        this.slideCount = this.slides.length;
        
        // Create wrapper
        const wrapper = document.createElement('div');
        wrapper.className = 'slider-wrapper';
        
        // Create track
        const track = document.createElement('div');
        track.className = 'slider-track';
        
        // Move slides to track
        this.slides.forEach(slide => {
            track.appendChild(slide.cloneNode(true));
        });
        
        // Clear original content and add new structure
        this.slider.innerHTML = '';
        wrapper.appendChild(track);
        this.slider.appendChild(wrapper);
        
        // Store references
        this.wrapper = wrapper;
        this.track = track;
        this.slides = track.querySelectorAll('.slide');
        
        // Set initial position
        this.goToSlide(0, false);
        
        // Add CSS
        this.addStyles();
    }

    createControls() {
        // Create arrows
        if (this.options.arrows) {
            const prevArrow = document.createElement('button');
            prevArrow.className = 'slider-arrow slider-prev';
            prevArrow.innerHTML = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>';
            
            const nextArrow = document.createElement('button');
            nextArrow.className = 'slider-arrow slider-next';
            nextArrow.innerHTML = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>';
            
            this.slider.appendChild(prevArrow);
            this.slider.appendChild(nextArrow);
            
            this.prevArrow = prevArrow;
            this.nextArrow = nextArrow;
        }
        
        // Create dots
        if (this.options.dots) {
            const dotsContainer = document.createElement('div');
            dotsContainer.className = 'slider-dots';
            
            for (let i = 0; i < Math.ceil(this.slideCount / this.options.slidesToScroll); i++) {
                const dot = document.createElement('button');
                dot.className = 'slider-dot';
                dot.dataset.slide = i;
                if (i === 0) dot.classList.add('active');
                dotsContainer.appendChild(dot);
            }
            
            this.slider.appendChild(dotsContainer);
            this.dots = dotsContainer.querySelectorAll('.slider-dot');
        }
    }

    bindEvents() {
        // Arrow events
        if (this.options.arrows) {
            this.prevArrow.addEventListener('click', () => this.prevSlide());
            this.nextArrow.addEventListener('click', () => this.nextSlide());
        }
        
        // Dot events
        if (this.options.dots) {
            this.dots.forEach(dot => {
                dot.addEventListener('click', (e) => {
                    const slideIndex = parseInt(e.target.dataset.slide);
                    this.goToSlide(slideIndex * this.options.slidesToScroll);
                });
            });
        }
        
        // Touch events
        if (this.options.swipe) {
            this.slider.addEventListener('touchstart', (e) => this.handleTouchStart(e), { passive: true });
            this.slider.addEventListener('touchmove', (e) => this.handleTouchMove(e), { passive: true });
            this.slider.addEventListener('touchend', () => this.handleTouchEnd());
            
            // Mouse events for desktop
            this.slider.addEventListener('mousedown', (e) => this.handleMouseDown(e));
            this.slider.addEventListener('mousemove', (e) => this.handleMouseMove(e));
            this.slider.addEventListener('mouseup', () => this.handleMouseUp());
            this.slider.addEventListener('mouseleave', () => this.handleMouseUp());
        }
        
        // Pause on hover
        if (this.options.pauseOnHover && this.options.autoplay) {
            this.slider.addEventListener('mouseenter', () => this.stopAutoplay());
            this.slider.addEventListener('mouseleave', () => this.startAutoplay());
        }
        
        // Responsive
        window.addEventListener('resize', () => this.updateResponsive());
        
        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (!this.slider.matches(':hover')) return;
            
            if (e.key === 'ArrowLeft') this.prevSlide();
            if (e.key === 'ArrowRight') this.nextSlide();
        });
    }

    goToSlide(index, animate = true) {
        if (this.isAnimating) return;
        
        // Handle infinite scroll
        if (this.options.infinite) {
            if (index < 0) {
                index = this.slideCount - this.options.slidesToShow;
            } else if (index >= this.slideCount) {
                index = 0;
            }
        } else {
            if (index < 0) index = 0;
            if (index > this.slideCount - this.options.slidesToShow) {
                index = this.slideCount - this.options.slidesToShow;
            }
        }
        
        this.currentSlide = index;
        
        // Update position
        const translateValue = this.options.vertical 
            ? `translateY(-${index * (100 / this.options.slidesToShow)}%)`
            : `translateX(-${index * (100 / this.options.slidesToShow)}%)`;
        
        if (animate) {
            this.isAnimating = true;
            this.track.style.transition = `transform ${this.options.speed}ms ease`;
            setTimeout(() => {
                this.isAnimating = false;
            }, this.options.speed);
        } else {
            this.track.style.transition = 'none';
        }
        
        this.track.style.transform = translateValue;
        
        // Update dots
        if (this.options.dots) {
            this.updateDots();
        }
        
        // Update arrows
        if (this.options.arrows && !this.options.infinite) {
            this.updateArrows();
        }
        
        // Callback
        if (this.options.onSlideChange) {
            this.options.onSlideChange.call(this, this.currentSlide);
        }
    }

    nextSlide() {
        this.goToSlide(this.currentSlide + this.options.slidesToScroll);
    }

    prevSlide() {
        this.goToSlide(this.currentSlide - this.options.slidesToScroll);
    }

    updateDots() {
        if (!this.dots) return;
        
        const activeDot = Math.floor(this.currentSlide / this.options.slidesToScroll);
        this.dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === activeDot);
        });
    }

    updateArrows() {
        if (!this.options.arrows) return;
        
        this.prevArrow.disabled = this.currentSlide === 0;
        this.nextArrow.disabled = this.currentSlide >= this.slideCount - this.options.slidesToShow;
    }

    startAutoplay() {
        if (!this.options.autoplay) return;
        
        this.stopAutoplay();
        this.autoplayTimer = setInterval(() => {
            this.nextSlide();
        }, this.options.autoplaySpeed);
    }

    stopAutoplay() {
        if (this.autoplayTimer) {
            clearInterval(this.autoplayTimer);
            this.autoplayTimer = null;
        }
    }

    // Touch handling
    handleTouchStart(e) {
        this.touchStartX = e.touches[0].clientX;
    }

    handleTouchMove(e) {
        this.touchEndX = e.touches[0].clientX;
    }

    handleTouchEnd() {
        if (!this.touchStartX || !this.touchEndX) return;
        
        const diff = this.touchStartX - this.touchEndX;
        const threshold = 50;
        
        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                this.nextSlide();
            } else {
                this.prevSlide();
            }
        }
        
        this.touchStartX = 0;
        this.touchEndX = 0;
    }

    // Mouse handling
    handleMouseDown(e) {
        this.mouseDown = true;
        this.touchStartX = e.clientX;
        this.track.style.cursor = 'grabbing';
    }

    handleMouseMove(e) {
        if (!this.mouseDown) return;
        this.touchEndX = e.clientX;
    }

    handleMouseUp() {
        if (!this.mouseDown) return;
        
        this.mouseDown = false;
        this.track.style.cursor = 'grab';
        
        if (!this.touchStartX || !this.touchEndX) return;
        
        const diff = this.touchStartX - this.touchEndX;
        const threshold = 50;
        
        if (Math.abs(diff) > threshold) {
            if (diff > 0) {
                this.nextSlide();
            } else {
                this.prevSlide();
            }
        }
        
        this.touchStartX = 0;
        this.touchEndX = 0;
    }

    updateResponsive() {
        if (!this.options.responsive || this.options.responsive.length === 0) return;
        
        const width = window.innerWidth;
        let activeBreakpoint = null;
        
        // Find active breakpoint
        this.options.responsive.forEach(breakpoint => {
            if (width <= breakpoint.breakpoint) {
                if (!activeBreakpoint || breakpoint.breakpoint < activeBreakpoint.breakpoint) {
                    activeBreakpoint = breakpoint;
                }
            }
        });
        
        // Apply settings
        if (activeBreakpoint) {
            Object.assign(this.options, activeBreakpoint.settings);
        }
        
        // Update slider
        this.goToSlide(this.currentSlide, false);
    }

    addStyles() {
        if (document.getElementById('alornix-slider-styles')) return;
        
        const style = document.createElement('style');
        style.id = 'alornix-slider-styles';
        style.textContent = `
            .alornix-slider {
                position: relative;
                overflow: hidden;
            }
            
            .slider-wrapper {
                overflow: hidden;
            }
            
            .slider-track {
                display: flex;
                transition: transform 0.5s ease;
                ${this.options.vertical ? 'flex-direction: column;' : ''}
            }
            
            .slide {
                flex: 0 0 ${100 / this.options.slidesToShow}%;
                max-width: ${100 / this.options.slidesToShow}%;
            }
            
            .slider-arrow {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                background: rgba(0, 0, 0, 0.5);
                color: white;
                border: none;
                padding: 1rem;
                cursor: pointer;
                z-index: 10;
                transition: background 0.3s;
            }
            
            .slider-arrow:hover {
                background: rgba(0, 0, 0, 0.7);
            }
            
            .slider-arrow:disabled {
                opacity: 0.3;
                cursor: not-allowed;
            }
            
            .slider-prev {
                left: 1rem;
            }
            
            .slider-next {
                right: 1rem;
            }
            
            .slider-dots {
                position: absolute;
                bottom: 1rem;
                left: 50%;
                transform: translateX(-50%);
                display: flex;
                gap: 0.5rem;
                z-index: 10;
            }
            
            .slider-dot {
                width: 10px;
                height: 10px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.5);
                border: none;
                cursor: pointer;
                transition: background 0.3s;
            }
            
            .slider-dot.active {
                background: white;
            }
            
            .slider-dot:hover {
                background: rgba(255, 255, 255, 0.8);
            }
            
            ${this.options.fade ? `
                .slider-track {
                    position: relative;
                }
                
                .slide {
                    position: absolute;
                    top: 0;
                    left: 0;
                    opacity: 0;
                    transition: opacity ${this.options.speed}ms ease;
                }
                
                .slide.active {
                    opacity: 1;
                }
            ` : ''}
        `;
        
        document.head.appendChild(style);
    }

    destroy() {
        this.stopAutoplay();
        
        // Remove event listeners
        if (this.prevArrow) this.prevArrow.removeEventListener('click', () => this.prevSlide());
        if (this.nextArrow) this.nextArrow.removeEventListener('click', () => this.nextSlide());
        
        // Reset HTML
        this.slider.innerHTML = '';
        this.slides.forEach(slide => {
            this.slider.appendChild(slide.cloneNode(true));
        });
        
        // Remove classes
        this.slider.classList.remove('alornix-slider');
    }
}

// Initialize sliders on DOM ready
document.addEventListener('DOMContentLoaded', () => {
    // Auto-initialize sliders with data attribute
    const sliders = document.querySelectorAll('[data-slider]');
    sliders.forEach(slider => {
        const options = slider.dataset.sliderOptions ? JSON.parse(slider.dataset.sliderOptions) : {};
        new AlornixSlider(slider, options);
    });
});

// Export for use
window.AlornixSlider = AlornixSlider;