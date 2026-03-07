# 🎨 ALORNIX Template Customization Guide

A comprehensive guide to customizing and extending the ALORNIX template system for your specific needs.

## 📑 Table of Contents

1. [Getting Started](#getting-started)
2. [Color Customization](#color-customization)
3. [Typography](#typography)
4. [Layout Modifications](#layout-modifications)
5. [Component Customization](#component-customization)
6. [Adding New Pages](#adding-new-pages)
7. [JavaScript Customization](#javascript-customization)
8. [Performance Optimization](#performance-optimization)
9. [Deployment](#deployment)
10. [Troubleshooting](#troubleshooting)

## 🚀 Getting Started

### Prerequisites

Before customizing the template, ensure you have:

- Basic knowledge of HTML, CSS, and JavaScript
- A code editor (VS Code, Sublime Text, etc.)
- A local web server (optional but recommended)
- Node.js and npm (for advanced customization)

### File Structure Overview

```
alornix-template/
├── index.html              # Main entry point
├── assets/
│   ├── css/               # Stylesheets
│   ├── js/                # JavaScript files
│   └── images/            # Image assets
├── pages/                 # Additional pages
├── components/            # Reusable components
└── docs/                  # Documentation
```

## 🎨 Color Customization

### Using CSS Variables

The template uses CSS custom properties for easy color management. Edit `assets/css/main.css`:

```css
:root {
    /* Primary Colors */
    --primary: #8b5cf6;        /* Purple */
    --primary-dark: #7c3aed;   /* Darker purple */
    --primary-light: #a78bfa;  /* Light purple */
    
    /* Secondary Colors */
    --secondary: #ec4899;       /* Pink */
    --secondary-dark: #db2777;  /* Dark pink */
    --secondary-light: #f9a8d4; /* Light pink */
    
    /* Neutral Colors */
    --gray-50: #f9fafb;
    --gray-100: #f3f4f6;
    --gray-200: #e5e7eb;
    --gray-300: #d1d5db;
    --gray-400: #9ca3af;
    --gray-500: #6b7280;
    --gray-600: #4b5563;
    --gray-700: #374151;
    --gray-800: #1f2937;
    --gray-900: #111827;
    
    /* Semantic Colors */
    --success: #10b981;
    --warning: #f59e0b;
    --error: #ef4444;
    --info: #3b82f6;
}
```

### Tailwind Color Classes

Since we're using Tailwind CSS via CDN, you can use any Tailwind color class:

```html
<!-- Change purple to blue -->
<button class="bg-blue-600 hover:bg-blue-700">Button</button>

<!-- Use custom gradient -->
<div class="bg-gradient-to-r from-green-400 to-blue-500">
    Gradient Background
</div>
```

### Creating a Dark Theme

Add dark mode support by toggling a class on the body:

```javascript
// Toggle dark mode
function toggleDarkMode() {
    document.body.classList.toggle('dark');
    localStorage.setItem('theme', 
        document.body.classList.contains('dark') ? 'dark' : 'light'
    );
}

// Apply saved theme
const savedTheme = localStorage.getItem('theme');
if (savedTheme === 'dark') {
    document.body.classList.add('dark');
}
```

Add dark mode styles:

```css
.dark {
    --bg-primary: #1f2937;
    --text-primary: #f3f4f6;
}

.dark body {
    background-color: var(--bg-primary);
    color: var(--text-primary);
}
```

## 📝 Typography

### Changing Fonts

#### Method 1: Google Fonts

Add to your HTML `<head>`:

```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
```

Update CSS:

```css
body {
    font-family: 'Poppins', sans-serif;
}
```

#### Method 2: Custom Fonts

```css
@font-face {
    font-family: 'CustomFont';
    src: url('/assets/fonts/custom-font.woff2') format('woff2'),
         url('/assets/fonts/custom-font.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

body {
    font-family: 'CustomFont', sans-serif;
}
```

### Typography Scale

Adjust the typography scale in CSS:

```css
:root {
    --text-xs: 0.75rem;    /* 12px */
    --text-sm: 0.875rem;   /* 14px */
    --text-base: 1rem;     /* 16px */
    --text-lg: 1.125rem;   /* 18px */
    --text-xl: 1.25rem;    /* 20px */
    --text-2xl: 1.5rem;    /* 24px */
    --text-3xl: 1.875rem;  /* 30px */
    --text-4xl: 2.25rem;   /* 36px */
    --text-5xl: 3rem;      /* 48px */
}
```

## 📐 Layout Modifications

### Changing Container Width

Modify the max-width of containers:

```css
.container {
    max-width: 1400px; /* Default: 1280px */
}

/* Or use Tailwind classes */
<div class="max-w-7xl mx-auto">
    <!-- Content -->
</div>
```

### Grid System

Customize grid layouts:

```html
<!-- 2 columns on mobile, 3 on tablet, 4 on desktop -->
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <!-- Grid items -->
</div>
```

### Spacing System

Adjust spacing using Tailwind classes:

- `p-{size}` - Padding
- `m-{size}` - Margin
- `space-x-{size}` - Horizontal spacing
- `space-y-{size}` - Vertical spacing

Sizes: 0, 0.5, 1, 2, 3, 4, 5, 6, 8, 10, 12, 16, 20, 24, 32, 40, 48, 56, 64

## 🧩 Component Customization

### Customizing Buttons

Create custom button styles:

```css
.btn-custom {
    @apply px-6 py-3 rounded-lg font-semibold transition-all duration-300;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
}

.btn-custom:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.5);
}
```

### Customizing Cards

```html
<!-- Custom card with hover effect -->
<div class="group relative overflow-hidden rounded-xl bg-white shadow-lg transition-all duration-300 hover:shadow-2xl">
    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-indigo-600 opacity-0 group-hover:opacity-10 transition-opacity"></div>
    <div class="p-6">
        <!-- Card content -->
    </div>
</div>
```

### Creating New Components

Example: Custom notification component

```html
<!-- Notification Component -->
<div class="notification" data-notification>
    <div class="notification-content">
        <span class="notification-icon">ℹ️</span>
        <p class="notification-message">This is a custom notification</p>
    </div>
    <button class="notification-close" data-close>×</button>
</div>

<style>
.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background: white;
    border-radius: 8px;
    padding: 16px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    gap: 12px;
    animation: slideIn 0.3s ease-out;
}

@keyframes slideIn {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}
</style>

<script>
document.querySelectorAll('[data-notification]').forEach(notification => {
    const closeBtn = notification.querySelector('[data-close]');
    closeBtn.addEventListener('click', () => {
        notification.style.animation = 'slideOut 0.3s ease-out';
        setTimeout(() => notification.remove(), 300);
    });
});
</script>
```

## 📄 Adding New Pages

### Step-by-Step Guide

1. **Create the HTML file**

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Page - ALORNIX</title>
    
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Include custom CSS -->
    <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
    <!-- Include header -->
    <?php include 'components/header-default.html'; ?>
    
    <!-- Page content -->
    <main>
        <!-- Your content here -->
    </main>
    
    <!-- Include footer -->
    <?php include 'components/footer-default.html'; ?>
    
    <!-- Include scripts -->
    <script src="/assets/js/main.js"></script>
</body>
</html>
```

2. **Add navigation link**

Update the navigation in `components/header-default.html`:

```html
<nav>
    <!-- Existing links -->
    <a href="/new-page.html">New Page</a>
</nav>
```

3. **Create page-specific styles** (optional)

```css
/* new-page.css */
.page-specific-class {
    /* Custom styles */
}
```

## 🔧 JavaScript Customization

### Adding Custom Functions

Create a new JavaScript file or add to `assets/js/main.js`:

```javascript
// Custom functionality
const CustomModule = {
    init: function() {
        this.bindEvents();
        this.initAnimations();
    },
    
    bindEvents: function() {
        // Event listeners
        document.addEventListener('click', (e) => {
            if (e.target.matches('.custom-trigger')) {
                this.handleCustomAction(e);
            }
        });
    },
    
    handleCustomAction: function(event) {
        // Custom logic
        console.log('Custom action triggered');
    },
    
    initAnimations: function() {
        // Initialize custom animations
    }
};

// Initialize on DOM ready
document.addEventListener('DOMContentLoaded', () => {
    CustomModule.init();
});
```

### Integrating Third-Party Libraries

Example: Adding AOS (Animate On Scroll)

```html
<!-- Add to <head> -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

<!-- Add before closing </body> -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>

<!-- Usage -->
<div data-aos="fade-up">
    This will animate on scroll
</div>
```

## ⚡ Performance Optimization

### Image Optimization

1. **Use appropriate formats**
   - JPEG for photographs
   - PNG for images with transparency
   - WebP for modern browsers
   - SVG for icons and logos

2. **Lazy loading**

```html
<img src="placeholder.jpg" 
     data-src="actual-image.jpg" 
     loading="lazy" 
     alt="Description">
```

3. **Responsive images**

```html
<picture>
    <source media="(max-width: 640px)" srcset="image-mobile.jpg">
    <source media="(max-width: 1024px)" srcset="image-tablet.jpg">
    <img src="image-desktop.jpg" alt="Description">
</picture>
```

### CSS Optimization

1. **Minify CSS for production**

```bash
# Using PostCSS
npx postcss assets/css/main.css -o assets/css/main.min.css --use cssnano
```

2. **Remove unused CSS**

```javascript
// tailwind.config.js
module.exports = {
    purge: ['./**/*.html'],
    // other config
}
```

### JavaScript Optimization

1. **Minify JavaScript**

```bash
# Using Terser
npx terser assets/js/main.js -o assets/js/main.min.js -c -m
```

2. **Code splitting**

```javascript
// Load components on demand
if (document.querySelector('.slider')) {
    import('./slider.js').then(module => {
        module.initSliders();
    });
}
```

## 🚀 Deployment

### Preparing for Production

1. **Minify assets**
2. **Optimize images**
3. **Enable compression**
4. **Set up caching headers**
5. **Use a CDN for assets**

### Deployment Checklist

- [ ] Update meta tags and SEO information
- [ ] Test all forms and interactive elements
- [ ] Check responsive design on real devices
- [ ] Validate HTML and CSS
- [ ] Test page load speed
- [ ] Set up analytics
- [ ] Configure error pages (404, etc.)
- [ ] Set up SSL certificate
- [ ] Create and submit sitemap
- [ ] Test cross-browser compatibility

### Hosting Options

1. **Static Hosting**
   - Netlify
   - Vercel
   - GitHub Pages
   - Surge.sh

2. **Traditional Hosting**
   - Shared hosting
   - VPS
   - Dedicated server

3. **Cloud Platforms**
   - AWS S3 + CloudFront
   - Google Cloud Storage
   - Azure Static Web Apps

## 🔍 Troubleshooting

### Common Issues and Solutions

#### Issue: Styles not applying

**Solution:**
- Check if Tailwind CDN is loading
- Clear browser cache
- Check for CSS syntax errors
- Ensure proper class names

#### Issue: JavaScript not working

**Solution:**
- Check browser console for errors
- Ensure scripts are loaded in correct order
- Verify DOM elements exist before accessing

#### Issue: Responsive layout broken

**Solution:**
- Check viewport meta tag
- Test with browser dev tools
- Verify breakpoint classes
- Check for fixed widths

#### Issue: Slow page load

**Solution:**
- Optimize images
- Minify CSS/JS
- Enable browser caching
- Use CDN for assets
- Reduce HTTP requests

### Browser Compatibility

Ensure compatibility by:

1. **Using Autoprefixer**

```css
/* Input */
.example {
    display: flex;
}

/* Output */
.example {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
```

2. **Polyfills for older browsers**

```html
<!-- Polyfill for older browsers -->
<script src="https://polyfill.io/v3/polyfill.min.js"></script>
```

## 📚 Additional Resources

- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [MDN Web Docs](https://developer.mozilla.org/)
- [Can I Use](https://caniuse.com/)
- [Web.dev](https://web.dev/)
- [A11y Project](https://www.a11yproject.com/)

## 🤝 Getting Help

If you need assistance:

1. Check the documentation
2. Search for similar issues
3. Contact support at support@alornix.com
4. Join our community forum

---

**Happy Customizing! 🎉**

*Last updated: January 2024*