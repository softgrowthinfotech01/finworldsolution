/**
 * ALORNIX Components Library
 * JavaScript functionality for UI components
 */

(function() {
    'use strict';

    const AlornixComponents = {
        
        // Initialize all components
        init: function() {
            this.initModals();
            this.initTabs();
            this.initAccordions();
            this.initDropdowns();
            this.initTooltips();
            this.initAlerts();
            this.initToasts();
            this.initProgressBars();
            this.initCopyToClipboard();
            this.initFileUpload();
            this.initRating();
            this.initSearch();
            this.initFilters();
            console.log('AlornixComponents initialized');
        },

        // Modal functionality
        initModals: function() {
            // Open modal
            document.querySelectorAll('[data-modal-toggle]').forEach(trigger => {
                trigger.addEventListener('click', (e) => {
                    e.preventDefault();
                    const modalId = trigger.dataset.modalToggle;
                    const modal = document.getElementById(modalId);
                    if (modal) {
                        modal.classList.add('active');
                        document.body.style.overflow = 'hidden';
                    }
                });
            });

            // Close modal
            document.querySelectorAll('[data-modal-close]').forEach(closeBtn => {
                closeBtn.addEventListener('click', () => {
                    const modal = closeBtn.closest('.modal');
                    if (modal) {
                        modal.classList.remove('active');
                        document.body.style.overflow = '';
                    }
                });
            });

            // Close on backdrop click
            document.querySelectorAll('.modal').forEach(modal => {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        modal.classList.remove('active');
                        document.body.style.overflow = '';
                    }
                });
            });

            // Close on ESC key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    const activeModal = document.querySelector('.modal.active');
                    if (activeModal) {
                        activeModal.classList.remove('active');
                        document.body.style.overflow = '';
                    }
                }
            });
        },

        // Tabs functionality
        initTabs: function() {
            document.querySelectorAll('[data-tabs]').forEach(tabContainer => {
                const tabs = tabContainer.querySelectorAll('[data-tab]');
                const panels = tabContainer.querySelectorAll('[data-tab-panel]');

                tabs.forEach(tab => {
                    tab.addEventListener('click', () => {
                        const targetPanel = tab.dataset.tab;

                        // Update tabs
                        tabs.forEach(t => t.classList.remove('active'));
                        tab.classList.add('active');

                        // Update panels
                        panels.forEach(panel => {
                            if (panel.dataset.tabPanel === targetPanel) {
                                panel.classList.add('active');
                            } else {
                                panel.classList.remove('active');
                            }
                        });
                    });
                });
            });
        },

        // Accordion functionality
        initAccordions: function() {
            document.querySelectorAll('.accordion-item').forEach(item => {
                const header = item.querySelector('.accordion-header');
                const content = item.querySelector('.accordion-content');

                header.addEventListener('click', () => {
                    const isOpen = item.classList.contains('active');

                    // Close all if single mode
                    if (item.closest('.accordion[data-single="true"]')) {
                        item.closest('.accordion').querySelectorAll('.accordion-item').forEach(i => {
                            i.classList.remove('active');
                            i.querySelector('.accordion-content').style.maxHeight = null;
                        });
                    }

                    // Toggle current
                    if (!isOpen) {
                        item.classList.add('active');
                        content.style.maxHeight = content.scrollHeight + 'px';
                    } else {
                        item.classList.remove('active');
                        content.style.maxHeight = null;
                    }
                });
            });
        },

        // Dropdown functionality
        initDropdowns: function() {
            document.querySelectorAll('.dropdown').forEach(dropdown => {
                const trigger = dropdown.querySelector('.dropdown-trigger');
                const menu = dropdown.querySelector('.dropdown-menu');

                trigger.addEventListener('click', (e) => {
                    e.stopPropagation();
                    dropdown.classList.toggle('active');
                });

                // Close on outside click
                document.addEventListener('click', () => {
                    dropdown.classList.remove('active');
                });

                // Prevent menu clicks from closing
                menu.addEventListener('click', (e) => {
                    e.stopPropagation();
                });
            });
        },

        // Tooltip functionality
        initTooltips: function() {
            document.querySelectorAll('[data-tooltip]').forEach(element => {
                const tooltipText = element.dataset.tooltip;
                const tooltipPosition = element.dataset.tooltipPosition || 'top';

                const tooltip = document.createElement('div');
                tooltip.className = `tooltip tooltip-${tooltipPosition}`;
                tooltip.textContent = tooltipText;
                document.body.appendChild(tooltip);

                element.addEventListener('mouseenter', () => {
                    const rect = element.getBoundingClientRect();
                    
                    switch(tooltipPosition) {
                        case 'top':
                            tooltip.style.left = rect.left + rect.width / 2 - tooltip.offsetWidth / 2 + 'px';
                            tooltip.style.top = rect.top - tooltip.offsetHeight - 10 + 'px';
                            break;
                        case 'bottom':
                            tooltip.style.left = rect.left + rect.width / 2 - tooltip.offsetWidth / 2 + 'px';
                            tooltip.style.top = rect.bottom + 10 + 'px';
                            break;
                        case 'left':
                            tooltip.style.left = rect.left - tooltip.offsetWidth - 10 + 'px';
                            tooltip.style.top = rect.top + rect.height / 2 - tooltip.offsetHeight / 2 + 'px';
                            break;
                        case 'right':
                            tooltip.style.left = rect.right + 10 + 'px';
                            tooltip.style.top = rect.top + rect.height / 2 - tooltip.offsetHeight / 2 + 'px';
                            break;
                    }

                    tooltip.classList.add('show');
                });

                element.addEventListener('mouseleave', () => {
                    tooltip.classList.remove('show');
                });
            });
        },

        // Alert functionality
        initAlerts: function() {
            document.querySelectorAll('.alert-close').forEach(closeBtn => {
                closeBtn.addEventListener('click', () => {
                    const alert = closeBtn.closest('.alert');
                    alert.style.animation = 'fadeOut 0.3s ease';
                    setTimeout(() => alert.remove(), 300);
                });
            });
        },

        // Toast notifications
        initToasts: function() {
            window.showToast = function(message, type = 'info', duration = 3000) {
                const toastContainer = document.getElementById('toast-container') || createToastContainer();
                
                const toast = document.createElement('div');
                toast.className = `toast toast-${type}`;
                toast.innerHTML = `
                    <span>${message}</span>
                    <button class="toast-close">&times;</button>
                `;
                
                toastContainer.appendChild(toast);
                
                // Animate in
                setTimeout(() => toast.classList.add('show'), 10);
                
                // Auto remove
                setTimeout(() => {
                    toast.classList.remove('show');
                    setTimeout(() => toast.remove(), 300);
                }, duration);
                
                // Manual close
                toast.querySelector('.toast-close').addEventListener('click', () => {
                    toast.classList.remove('show');
                    setTimeout(() => toast.remove(), 300);
                });
            };
            
            function createToastContainer() {
                const container = document.createElement('div');
                container.id = 'toast-container';
                container.className = 'toast-container';
                document.body.appendChild(container);
                return container;
            }
        },

        // Progress bars
        initProgressBars: function() {
            document.querySelectorAll('.progress-bar').forEach(progressBar => {
                const value = progressBar.dataset.value;
                const animated = progressBar.dataset.animated === 'true';
                const bar = progressBar.querySelector('.progress-fill') || progressBar;
                
                if (animated) {
                    // Animate on scroll
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                bar.style.width = value + '%';
                                observer.unobserve(entry.target);
                            }
                        });
                    });
                    observer.observe(progressBar);
                } else {
                    bar.style.width = value + '%';
                }
            });
        },

        // Copy to clipboard
        initCopyToClipboard: function() {
            document.querySelectorAll('[data-copy]').forEach(button => {
                button.addEventListener('click', async () => {
                    const textToCopy = button.dataset.copy || button.textContent;
                    
                    try {
                        await navigator.clipboard.writeText(textToCopy);
                        
                        // Show feedback
                        const originalText = button.textContent;
                        button.textContent = 'Copied!';
                        button.classList.add('success');
                        
                        setTimeout(() => {
                            button.textContent = originalText;
                            button.classList.remove('success');
                        }, 2000);
                    } catch (err) {
                        console.error('Failed to copy:', err);
                    }
                });
            });
        },

        // File upload
        initFileUpload: function() {
            document.querySelectorAll('.file-upload').forEach(fileUpload => {
                const input = fileUpload.querySelector('input[type="file"]');
                const dropZone = fileUpload.querySelector('.file-upload-dropzone');
                const preview = fileUpload.querySelector('.file-upload-preview');
                
                if (dropZone) {
                    // Drag and drop
                    dropZone.addEventListener('dragover', (e) => {
                        e.preventDefault();
                        dropZone.classList.add('dragover');
                    });
                    
                    dropZone.addEventListener('dragleave', () => {
                        dropZone.classList.remove('dragover');
                    });
                    
                    dropZone.addEventListener('drop', (e) => {
                        e.preventDefault();
                        dropZone.classList.remove('dragover');
                        handleFiles(e.dataTransfer.files);
                    });
                }
                
                // File input change
                input.addEventListener('change', (e) => {
                    handleFiles(e.target.files);
                });
                
                function handleFiles(files) {
                    if (!preview) return;
                    
                    preview.innerHTML = '';
                    
                    Array.from(files).forEach(file => {
                        const fileItem = document.createElement('div');
                        fileItem.className = 'file-item';
                        
                        if (file.type.startsWith('image/')) {
                            const img = document.createElement('img');
                            img.src = URL.createObjectURL(file);
                            fileItem.appendChild(img);
                        } else {
                            fileItem.innerHTML = `
                                <span class="file-icon">📄</span>
                                <span class="file-name">${file.name}</span>
                            `;
                        }
                        
                        preview.appendChild(fileItem);
                    });
                }
            });
        },

        // Rating component
        initRating: function() {
            document.querySelectorAll('.rating').forEach(rating => {
                const stars = rating.querySelectorAll('.rating-star');
                const input = rating.querySelector('input[type="hidden"]');
                let currentRating = parseInt(input?.value || 0);
                
                stars.forEach((star, index) => {
                    star.addEventListener('click', () => {
                        currentRating = index + 1;
                        if (input) input.value = currentRating;
                        updateStars();
                    });
                    
                    star.addEventListener('mouseenter', () => {
                        highlightStars(index + 1);
                    });
                });
                
                rating.addEventListener('mouseleave', () => {
                    updateStars();
                });
                
                function updateStars() {
                    stars.forEach((star, index) => {
                        star.classList.toggle('active', index < currentRating);
                    });
                }
                
                function highlightStars(count) {
                    stars.forEach((star, index) => {
                        star.classList.toggle('hover', index < count);
                    });
                }
                
                updateStars();
            });
        },

        // Search functionality
        initSearch: function() {
            document.querySelectorAll('.search-box').forEach(searchBox => {
                const input = searchBox.querySelector('.search-input');
                const results = searchBox.querySelector('.search-results');
                const clearBtn = searchBox.querySelector('.search-clear');
                
                let searchTimeout;
                
                input.addEventListener('input', (e) => {
                    const query = e.target.value;
                    
                    if (clearBtn) {
                        clearBtn.style.display = query ? 'block' : 'none';
                    }
                    
                    clearTimeout(searchTimeout);
                    searchTimeout = setTimeout(() => {
                        if (query.length > 2) {
                            // Simulate search results
                            showResults(query);
                        } else {
                            hideResults();
                        }
                    }, 300);
                });
                
                if (clearBtn) {
                    clearBtn.addEventListener('click', () => {
                        input.value = '';
                        clearBtn.style.display = 'none';
                        hideResults();
                    });
                }
                
                function showResults(query) {
                    if (!results) return;
                    
                    // This would normally fetch real results
                    results.innerHTML = `
                        <div class="search-result-item">Result for "${query}" 1</div>
                        <div class="search-result-item">Result for "${query}" 2</div>
                        <div class="search-result-item">Result for "${query}" 3</div>
                    `;
                    results.classList.add('show');
                }
                
                function hideResults() {
                    if (!results) return;
                    results.classList.remove('show');
                }
                
                // Close results on outside click
                document.addEventListener('click', (e) => {
                    if (!searchBox.contains(e.target)) {
                        hideResults();
                    }
                });
            });
        },

        // Filter functionality
        initFilters: function() {
            document.querySelectorAll('[data-filter-group]').forEach(filterGroup => {
                const filters = filterGroup.querySelectorAll('[data-filter]');
                const items = document.querySelectorAll('[data-filter-item]');
                
                filters.forEach(filter => {
                    filter.addEventListener('click', () => {
                        const filterValue = filter.dataset.filter;
                        
                        // Update active filter
                        filters.forEach(f => f.classList.remove('active'));
                        filter.classList.add('active');
                        
                        // Filter items
                        items.forEach(item => {
                            if (filterValue === 'all' || item.dataset.filterItem === filterValue) {
                                item.style.display = '';
                                item.classList.add('fade-in');
                            } else {
                                item.style.display = 'none';
                            }
                        });
                    });
                });
            });
        }
    };

    // Component styles
    const style = document.createElement('style');
    style.textContent = `
        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }
        
        .modal.active {
            display: flex;
        }
        
        .modal-content {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            max-width: 500px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
        }
        
        /* Tooltip styles */
        .tooltip {
            position: fixed;
            background: #333;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            font-size: 0.875rem;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s;
            z-index: 1000;
        }
        
        .tooltip.show {
            opacity: 1;
        }
        
        /* Toast styles */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 2000;
        }
        
        .toast {
            background: white;
            border-radius: 4px;
            padding: 1rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-width: 250px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transform: translateX(400px);
            transition: transform 0.3s;
        }
        
        .toast.show {
            transform: translateX(0);
        }
        
        .toast-success {
            border-left: 4px solid #10b981;
        }
        
        .toast-error {
            border-left: 4px solid #ef4444;
        }
        
        .toast-warning {
            border-left: 4px solid #f59e0b;
        }
        
        .toast-info {
            border-left: 4px solid #3b82f6;
        }
        
        /* Search results */
        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 4px;
            margin-top: 0.5rem;
            max-height: 300px;
            overflow-y: auto;
            display: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .search-results.show {
            display: block;
        }
        
        .search-result-item {
            padding: 0.75rem 1rem;
            cursor: pointer;
            transition: background 0.2s;
        }
        
        .search-result-item:hover {
            background: #f3f4f6;
        }
        
        /* Accordion content */
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        /* Rating stars */
        .rating-star {
            cursor: pointer;
            color: #d1d5db;
            transition: color 0.2s;
        }
        
        .rating-star.active,
        .rating-star.hover {
            color: #fbbf24;
        }
    `;
    document.head.appendChild(style);

    // Initialize on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => AlornixComponents.init());
    } else {
        AlornixComponents.init();
    }

    // Export to global scope
    window.AlornixComponents = AlornixComponents;

})();