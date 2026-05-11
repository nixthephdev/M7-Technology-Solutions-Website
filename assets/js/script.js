// DOM Content Loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initMobileMenu();
    initBannerSlider();
    initScrollAnimations();
    initBackToTop();
    initSmoothScrolling();
    initContactForm();
    initProductSearch();
});

// Mobile Menu Toggle
function initMobileMenu() {
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            
            // Toggle hamburger icon
            const icon = this.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!mobileToggle.contains(e.target) && !navMenu.contains(e.target)) {
                navMenu.classList.remove('active');
                const icon = mobileToggle.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }
}

// Banner Slider
function initBannerSlider() {
    const slides = document.querySelectorAll('.banner-slide');
    const dots = document.querySelectorAll('.banner-dot');
    let currentSlide = 0;
    let slideInterval;
    
    if (slides.length === 0) return;
    
    // Show first slide
    slides[0].classList.add('active');
    if (dots.length > 0) dots[0].classList.add('active');
    
    function showSlide(index) {
        // Hide all slides
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Show current slide
        slides[index].classList.add('active');
        if (dots[index]) dots[index].classList.add('active');
        
        currentSlide = index;
    }
    
    function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        showSlide(next);
    }
    
    function startAutoSlide() {
        slideInterval = setInterval(nextSlide, 5000); // 5 seconds
    }
    
    function stopAutoSlide() {
        if (slideInterval) {
            clearInterval(slideInterval);
        }
    }
    
    // Start auto-advance slides
    startAutoSlide();
    
    // Dot navigation with data attributes
    dots.forEach((dot) => {
        dot.addEventListener('click', () => {
            const slideIndex = parseInt(dot.getAttribute('data-slide'));
            showSlide(slideIndex);
            // Restart auto-slide after manual navigation
            stopAutoSlide();
            startAutoSlide();
        });
    });
    
    // Pause auto-slide on hover
    const bannerContainer = document.querySelector('.hero-banner');
    if (bannerContainer) {
        bannerContainer.addEventListener('mouseenter', stopAutoSlide);
        bannerContainer.addEventListener('mouseleave', startAutoSlide);
    }
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            const prev = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prev);
            stopAutoSlide();
            startAutoSlide();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            stopAutoSlide();
            startAutoSlide();
        }
    });
}

// Scroll Animations
function initScrollAnimations() {
    const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });
    
    animatedElements.forEach(el => {
        observer.observe(el);
    });
}

// Back to Top Button
function initBackToTop() {
    const backToTopBtn = document.getElementById('backToTop');
    
    if (!backToTopBtn) return;
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.add('show');
        } else {
            backToTopBtn.classList.remove('show');
        }
    });
    
    backToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Smooth Scrolling for Anchor Links
function initSmoothScrolling() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const headerHeight = document.querySelector('.header').offsetHeight;
                const targetPosition = targetElement.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Contact Form Handling - REMOVED JAVASCRIPT INTERFERENCE
function initContactForm() {
    // JavaScript form handling removed to allow PHP processing
    // The form will now submit normally to PHP for database processing
    console.log('Contact form JavaScript interference removed - PHP will handle form submission');
}

// Product Filter (for products page)
function initProductFilter() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');
    
    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter products
            productCards.forEach(card => {
                if (filter === 'all' || card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                    card.classList.add('fade-in');
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
}

// Enhanced Product Search
function initProductSearch() {
    const searchInput = document.getElementById('productSearch');
    if (!searchInput) return;
    
    // Wrap search input in container for styling
    const searchContainer = searchInput.parentElement;
    searchContainer.classList.add('search-container');
    
    // Add search icon
    const searchIcon = document.createElement('i');
    searchIcon.className = 'fas fa-search';
    searchContainer.appendChild(searchIcon);
    
    // Add clear button
    const clearButton = document.createElement('button');
    clearButton.innerHTML = '×';
    clearButton.className = 'search-clear';
    clearButton.onclick = function() {
        searchInput.value = '';
        searchInput.dispatchEvent(new Event('input'));
        clearButton.style.display = 'none';
    };
    searchContainer.appendChild(clearButton);
    
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();
        const productCards = document.querySelectorAll('.product-card');
        
        // Show/hide clear button
        clearButton.style.display = this.value ? 'block' : 'none';
        
        // If search is empty, show everything normally
        if (searchTerm === '') {
            // Show all sections
            document.querySelectorAll('section').forEach(function(section) {
                section.style.display = 'block';
            });
            
            // Show all product cards
            productCards.forEach(function(card) {
                card.style.display = 'block';
            });
            
            // Hide search results container
            const searchResults = document.getElementById('searchResultsContainer');
            if (searchResults) searchResults.remove();
            
            return;
        }
        
        // SEARCH MODE: Hide ALL sections except search
        const searchSection = document.querySelector('#productSearch').closest('.section');
        document.querySelectorAll('section').forEach(function(section) {
            if (section !== searchSection) {
                section.style.display = 'none';
            }
        });
        
        // Create or get search results container
        let searchResults = document.getElementById('searchResultsContainer');
        if (!searchResults) {
            searchResults = document.createElement('section');
            searchResults.id = 'searchResultsContainer';
            searchResults.className = 'section';
            searchResults.style.cssText = `
                padding: 2rem 0;
                background: white;
            `;
            searchResults.innerHTML = `
                <div class="container">
                    <h2 class="section-title">Search Results</h2>
                    <div id="searchResultsGrid" class="product-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;"></div>
                </div>
            `;
            
            // Insert after search section
            searchSection.insertAdjacentElement('afterend', searchResults);
        }
        
        // Show search results container
        searchResults.style.display = 'block';
        const searchResultsGrid = document.getElementById('searchResultsGrid');
        
        // Clear previous results
        searchResultsGrid.innerHTML = '';
        
        let hasVisibleProducts = false;
        
        productCards.forEach(function(card) {
            const productName = card.querySelector('h3') ? card.querySelector('h3').textContent.toLowerCase() : '';
            
            // Get all text content from the card for comprehensive search
            let allText = '';
            const textElements = card.querySelectorAll('h3, p, li, strong');
            textElements.forEach(function(element) {
                allText += ' ' + element.textContent.toLowerCase();
            });
            
            // Also search in data attributes
            const category = card.getAttribute('data-category') || '';
            allText += ' ' + category;
            
            // Check if search term matches
            const isMatch = productName.includes(searchTerm) || allText.includes(searchTerm);
            
            if (isMatch) {
                // Clone the card and add to search results
                const clonedCard = card.cloneNode(true);
                searchResultsGrid.appendChild(clonedCard);
                hasVisibleProducts = true;
            }
        });
        
        // Show "no results" message if no products match
        if (!hasVisibleProducts) {
            const noResultsMsg = document.createElement('div');
            noResultsMsg.style.cssText = `
                text-align: center;
                padding: 3rem;
                color: #64748b;
                font-size: 1.1rem;
                background: #f8fafc;
                border-radius: 12px;
                margin: 2rem 0;
                grid-column: 1 / -1;
            `;
            noResultsMsg.innerHTML = `
                <i class="fas fa-search" style="font-size: 3rem; color: #cbd5e1; margin-bottom: 1rem; display: block;"></i>
                <h3 style="color: #374151; margin-bottom: 0.5rem; font-size: 1.5rem;">No products found for "${searchTerm}"</h3>
                <p style="margin: 0;">Try adjusting your search terms or clear the search to browse all products.</p>
            `;
            searchResultsGrid.appendChild(noResultsMsg);
        }
    });
}

// Notification System
function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existingNotifications = document.querySelectorAll('.notification');
    existingNotifications.forEach(n => n.remove());
    
    // Create notification
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <span>${message}</span>
        <button class="notification-close">&times;</button>
    `;
    
    // Add styles
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'success' ? '#10b981' : type === 'error' ? '#ef4444' : '#3b82f6'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        z-index: 10000;
        display: flex;
        align-items: center;
        gap: 1rem;
        animation: slideInRight 0.3s ease;
    `;
    
    // Add close functionality
    const closeBtn = notification.querySelector('.notification-close');
    closeBtn.style.cssText = `
        background: none;
        border: none;
        color: white;
        font-size: 1.2rem;
        cursor: pointer;
        padding: 0;
        margin-left: 0.5rem;
    `;
    
    closeBtn.addEventListener('click', () => {
        notification.remove();
    });
    
    // Add to page
    document.body.appendChild(notification);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.remove();
        }
    }, 5000);
}

// Lazy Loading for Images
function initLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => {
        imageObserver.observe(img);
    });
}

// Utility Functions
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    }
}

// Add CSS animations
const style = document.createElement('style');
style.textContent = `
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    .lazy {
        opacity: 0;
        transition: opacity 0.3s;
    }
    
    .lazy.loaded {
        opacity: 1;
    }
`;
document.head.appendChild(style);
