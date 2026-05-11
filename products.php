<?php 
$page_title = "Products";
include 'includes/header.php';
$products = include 'data/products.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero-banner" style="height: 300px;">
        <div class="banner-slide active">
            <div class="banner-content">
                <h2>Our Products & Services</h2>
                <p>Comprehensive solutions for semiconductor, healthcare, and industrial applications</p>
            </div>
        </div>
    </section>

    <!-- Product Categories Navigation -->
    <section class="section" style="background: #f8fafc; padding: 2rem 0;">
        <div class="container">
            <div class="product-nav" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 1rem;">
                <a href="#dicing" class="btn btn-primary">Dicing Products</a>
                <a href="#equipment" class="btn">Equipment</a>
                <a href="#inspection" class="btn">Inspection</a>
                <a href="#esd" class="btn">ESD Products</a>
                <a href="#services" class="btn">Other Services</a>
            </div>
        </div>
    </section>

    <!-- Product Search -->
    <section class="section" style="padding: 2rem 0;">
        <div class="container">
            <div style="max-width: 600px; margin: 0 auto;">
                <div class="form-group">
                    <input type="text" id="productSearch" class="form-control" placeholder="Search products...">
                </div>
            </div>
        </div>
    </section>


    <!-- Dicing Products Section -->
    <section id="dicing" class="section" style="background: #f8fafc;">
        <div class="container">
            <h2 class="section-title fade-in"><?php echo $products['dicing']['title']; ?></h2>
            <p class="section-subtitle fade-in"><?php echo $products['dicing']['description']; ?></p>
            
            <!-- Dicing Consumables -->
            <div class="fade-in">
                <h3 style="font-size: 2rem; color: #1e40af; margin: 3rem 0 2rem; text-align: center;">
                    <?php echo $products['dicing']['categories']['consumables']['title']; ?>
                </h3>
                
                <div class="product-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                    <?php foreach ($products['dicing']['categories']['consumables']['products'] as $index => $product): ?>
                    <div class="product-card company-card" data-category="dicing">
                        <div class="product-image" style="height: 300px; background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; border-radius: 8px; overflow: hidden;">
                            <?php if (isset($product['image']) && !empty($product['image'])): ?>
                                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" style="width: 90%; height: 90%; object-fit: contain; padding: 5px;" onclick="openImagePopup('<?php echo $product['image']; ?>', '<?php echo addslashes($product['name']); ?>')">
                            <?php else: ?>
                                <i class="fas fa-cut" style="font-size: 3rem; color: #2563eb;"></i>
                            <?php endif; ?>
                        </div>
                        <h3 style="color: #1e40af; margin-bottom: 1rem;"><?php echo $product['name']; ?></h3>
                        <p style="color: #64748b; margin-bottom: 1rem;"><?php echo $product['description']; ?></p>
                        
                        <!-- Action Buttons -->
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 1rem; flex-wrap: wrap;">
                            <?php if (isset($product['application'])): ?>
                            <button class="btn btn-sm" onclick="toggleDetails('application-<?php echo $index; ?>')" style="background: #3b82f6; color: white; padding: 0.5rem 1rem; border: none; border-radius: 4px; cursor: pointer; font-size: 0.875rem;">
                                <i class="fas fa-info-circle"></i> View Application
                            </button>
                            <?php endif; ?>
                            
                            <?php if (isset($product['specifications'])): ?>
                            <button class="btn btn-sm" onclick="toggleDetails('specifications-<?php echo $index; ?>')" style="background: #10b981; color: white; padding: 0.5rem 1rem; border: none; border-radius: 4px; cursor: pointer; font-size: 0.875rem;">
                                <i class="fas fa-cog"></i> View Specifications
                            </button>
                            <?php endif; ?>
                            
                            <?php if (isset($product['features'])): ?>
                            <button class="btn btn-sm" onclick="toggleDetails('features-<?php echo $index; ?>')" style="background: #8b5cf6; color: white; padding: 0.5rem 1rem; border: none; border-radius: 4px; cursor: pointer; font-size: 0.875rem;">
                                <i class="fas fa-star"></i> View Features
                            </button>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Collapsible Details -->
                        <?php if (isset($product['application'])): ?>
                        <div id="application-<?php echo $index; ?>" class="details-section" style="display: none; margin-top: 1rem; padding: 1rem; background: #f8fafc; border-radius: 6px; border-left: 4px solid #3b82f6;">
                            <strong style="color: #1e40af;">Application:</strong>
                            <p style="margin-top: 0.5rem; color: #64748b;"><?php echo $product['application']; ?></p>
                        </div>
                        <?php endif; ?>
                        
                        <?php if (isset($product['specifications'])): ?>
                        <div id="specifications-<?php echo $index; ?>" class="details-section" style="display: none; margin-top: 1rem; padding: 1rem; background: #f0fdf4; border-radius: 6px; border-left: 4px solid #10b981;">
                            <strong style="color: #059669;">Specifications:</strong>
                            <ul style="margin-top: 0.5rem; color: #64748b; padding-left: 1.5rem;">
                                <?php foreach ($product['specifications'] as $key => $value): ?>
                                <li style="margin-bottom: 0.25rem;"><strong><?php echo $key; ?>:</strong> <?php echo $value; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        
                        <?php if (isset($product['features'])): ?>
                        <div id="features-<?php echo $index; ?>" class="details-section" style="display: none; margin-top: 1rem; padding: 1rem; background: #faf5ff; border-radius: 6px; border-left: 4px solid #8b5cf6;">
                            <strong style="color: #7c3aed;">Features:</strong>
                            <ul style="margin-top: 0.5rem; color: #64748b; padding-left: 1.5rem;">
                                <?php foreach ($product['features'] as $feature): ?>
                                <li style="margin-bottom: 0.25rem;"><?php echo $feature; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Dicing Spare Parts -->
            <div class="fade-in" style="margin-top: 4rem;">
                <h3 style="font-size: 2rem; color: #1e40af; margin: 3rem 0 2rem; text-align: center;">
                    <?php echo $products['dicing']['categories']['spare_parts']['title']; ?>
                </h3>
                
                <div class="product-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                    <?php foreach ($products['dicing']['categories']['spare_parts']['products'] as $index => $product): ?>
                    <?php $spareIndex = $index + 100; // Offset to avoid ID conflicts ?>
                    <div class="product-card company-card" data-category="dicing">
                        <div class="product-image" style="height: 300px; background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; border-radius: 8px; overflow: hidden;">
                            <?php if (isset($product['image']) && !empty($product['image'])): ?>
                                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" style="width: 90%; height: 90%; object-fit: contain; padding: 5px;" onclick="openImagePopup('<?php echo $product['image']; ?>', '<?php echo addslashes($product['name']); ?>')">
                            <?php else: ?>
                                <i class="fas fa-tools" style="font-size: 3rem; color: #2563eb;"></i>
                            <?php endif; ?>
                        </div>
                        <h3 style="color: #1e40af; margin-bottom: 1rem;"><?php echo $product['name']; ?></h3>
                        <p style="color: #64748b; margin-bottom: 1rem;"><?php echo $product['description']; ?></p>
                        
                        <!-- Action Buttons -->
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 1rem; flex-wrap: wrap;">
                            <?php if (isset($product['specifications'])): ?>
                            <button class="btn btn-sm" onclick="toggleDetails('specifications-<?php echo $spareIndex; ?>')" style="background: #10b981; color: white; padding: 0.5rem 1rem; border: none; border-radius: 4px; cursor: pointer; font-size: 0.875rem;">
                                <i class="fas fa-cog"></i> View Specifications
                            </button>
                            <?php endif; ?>
                            
                            <?php if (isset($product['types'])): ?>
                            <button class="btn btn-sm" onclick="toggleDetails('types-<?php echo $spareIndex; ?>')" style="background: #f59e0b; color: white; padding: 0.5rem 1rem; border: none; border-radius: 4px; cursor: pointer; font-size: 0.875rem;">
                                <i class="fas fa-list"></i> View Types
                            </button>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Collapsible Details -->
                        <?php if (isset($product['specifications'])): ?>
                        <div id="specifications-<?php echo $spareIndex; ?>" class="details-section" style="display: none; margin-top: 1rem; padding: 1rem; background: #f0fdf4; border-radius: 6px; border-left: 4px solid #10b981;">
                            <strong style="color: #059669;">Specifications:</strong>
                            <ul style="margin-top: 0.5rem; color: #64748b; padding-left: 1.5rem;">
                                <?php foreach ($product['specifications'] as $key => $value): ?>
                                <li style="margin-bottom: 0.25rem;"><strong><?php echo $key; ?>:</strong> <?php echo $value; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        
                        <?php if (isset($product['types'])): ?>
                        <div id="types-<?php echo $spareIndex; ?>" class="details-section" style="display: none; margin-top: 1rem; padding: 1rem; background: #fffbeb; border-radius: 6px; border-left: 4px solid #f59e0b;">
                            <strong style="color: #d97706;">Types:</strong>
                            <ul style="margin-top: 0.5rem; color: #64748b; padding-left: 1.5rem;">
                                <?php foreach ($product['types'] as $type): ?>
                                <li style="margin-bottom: 0.25rem;"><?php echo $type; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        
                        <?php if (isset($product['note'])): ?>
                        <div style="margin-top: 1rem; padding: 1rem; background: #fef2f2; border-radius: 6px; border-left: 4px solid #ef4444;">
                            <p style="font-style: italic; color: #dc2626; margin: 0;"><strong>Note:</strong> <?php echo $product['note']; ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Equipment Section -->
    <section id="equipment" class="section">
        <div class="container">
            <h2 class="section-title fade-in"><?php echo $products['equipment']['title']; ?></h2>
            <p class="section-subtitle fade-in"><?php echo $products['equipment']['description']; ?></p>
            
            <div class="product-grid fade-in" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                <?php foreach ($products['equipment']['products'] as $product): ?>
                <div class="product-card company-card" data-category="equipment">
                    <div class="product-image" style="height: 300px; background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; border-radius: 8px; overflow: hidden;">
                        <?php if (isset($product['image']) && !empty($product['image'])): ?>
                            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" style="width: 90%; height: 90%; object-fit: contain; padding: 5px;" onclick="openImagePopup('<?php echo $product['image']; ?>', '<?php echo addslashes($product['name']); ?>')">
                        <?php else: ?>
                            <i class="fas fa-cogs" style="font-size: 3rem; color: #2563eb;"></i>
                        <?php endif; ?>
                    </div>
                    <h3 style="color: #1e40af; margin-bottom: 1rem;"><?php echo $product['name']; ?></h3>
                    <p style="color: #64748b;"><?php echo $product['description']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Inspection Section -->
    <section id="inspection" class="section" style="background: #f8fafc;">
        <div class="container">
            <h2 class="section-title fade-in"><?php echo $products['inspection']['title']; ?></h2>
            <p class="section-subtitle fade-in"><?php echo $products['inspection']['description']; ?></p>
            
            <div class="product-grid fade-in" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                <?php foreach ($products['inspection']['products'] as $product): ?>
                <div class="product-card company-card" data-category="inspection">
                    <div class="product-image" style="height: 300px; background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; border-radius: 8px; overflow: hidden;">
                        <?php if (isset($product['image']) && !empty($product['image'])): ?>
                            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" style="width: 90%; height: 90%; object-fit: contain; padding: 5px;" onclick="openImagePopup('<?php echo $product['image']; ?>', '<?php echo addslashes($product['name']); ?>')">
                        <?php else: ?>
                            <i class="fas fa-search" style="font-size: 3rem; color: #2563eb;"></i>
                        <?php endif; ?>
                    </div>
                    <h3 style="color: #1e40af; margin-bottom: 1rem;"><?php echo $product['name']; ?></h3>
                    <p style="color: #64748b;"><?php echo $product['description']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ESD Products Section -->
    <section id="esd" class="section">
        <div class="container">
            <h2 class="section-title fade-in"><?php echo $products['esd']['title']; ?></h2>
            <p class="section-subtitle fade-in"><?php echo $products['esd']['description']; ?></p>
            
            <!-- ESD Consumables -->
            <div class="fade-in">
                <h3 style="font-size: 2rem; color: #1e40af; margin: 3rem 0 2rem; text-align: center;">
                    <?php echo $products['esd']['categories']['consumables']['title']; ?>
                </h3>
                
                <div class="product-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                    <?php foreach ($products['esd']['categories']['consumables']['products'] as $product): ?>
                    <div class="product-card company-card" data-category="esd">
                        <div class="product-image" style="height: 300px; background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; border-radius: 8px; overflow: hidden;">
                            <?php if (isset($product['image']) && !empty($product['image'])): ?>
                                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" style="width: 90%; height: 90%; object-fit: contain; padding: 5px;" onclick="openImagePopup('<?php echo $product['image']; ?>', '<?php echo addslashes($product['name']); ?>')">
                            <?php else: ?>
                                <i class="fas fa-shield-alt" style="font-size: 3rem; color: #2563eb;"></i>
                            <?php endif; ?>
                        </div>
                        <h3 style="color: #1e40af; margin-bottom: 1rem;"><?php echo $product['name']; ?></h3>
                        <p style="color: #64748b;"><?php echo $product['description']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- ESD Equipment -->
            <div class="fade-in" style="margin-top: 4rem;">
                <h3 style="font-size: 2rem; color: #1e40af; margin: 3rem 0 2rem; text-align: center;">
                    <?php echo $products['esd']['categories']['equipment']['title']; ?>
                </h3>
                
                <div class="product-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                    <?php foreach ($products['esd']['categories']['equipment']['products'] as $product): ?>
                    <div class="product-card company-card" data-category="esd">
                        <div class="product-image" style="height: 300px; background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; border-radius: 8px; overflow: hidden;">
                            <?php if (isset($product['image']) && !empty($product['image'])): ?>
                                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" style="width: 90%; height: 90%; object-fit: contain; padding: 5px;" onclick="openImagePopup('<?php echo $product['image']; ?>', '<?php echo addslashes($product['name']); ?>')">
                            <?php else: ?>
                                <i class="fas fa-cogs" style="font-size: 3rem; color: #2563eb;"></i>
                            <?php endif; ?>
                        </div>
                        <h3 style="color: #1e40af; margin-bottom: 1rem;"><?php echo $product['name']; ?></h3>
                        <p style="color: #64748b;"><?php echo $product['description']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Other Services Section -->
    <section id="services" class="section" style="background: #f8fafc;">
        <div class="container">
            <h2 class="section-title fade-in"><?php echo $products['services']['title']; ?></h2>
            <p class="section-subtitle fade-in"><?php echo $products['services']['description']; ?></p>
            <p class="section-subtitle fade-in">We offer a range of additional services that go beyond the products listed in our catalog. These include sourcing obsolete parts that are no longer readily available and supplying specialized equipment tailored to your specific needs. Our goal is to provide comprehensive support, ensuring that you have access to hard-to-find components and the right equipment to keep your operations running smoothly.</p>
            
            <div class="product-grid fade-in" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                <?php foreach ($products['services']['services'] as $service): ?>
                <div class="product-card company-card" data-category="services">
                    <div class="product-image" style="height: 200px; background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; border-radius: 8px;">
                        <i class="fas fa-wrench" style="font-size: 3rem; color: #2563eb;"></i>
                    </div>
                    <h3 style="color: #1e40af; margin-bottom: 1rem;"><?php echo $service['name']; ?></h3>
                    <p style="color: #64748b;"><?php echo $service['description']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section">
        <div class="container">
            <div style="text-align: center; padding: 3rem 0;">
                <h2 class="section-title fade-in">Need a Custom Solution?</h2>
                <p class="section-subtitle fade-in">Can't find what you're looking for? Contact us for custom solutions and specialized equipment sourcing.</p>
                <div class="fade-in">
                    <a href="contact.php" class="btn btn-primary" style="margin-right: 1rem;">Contact Us</a>
                    <a href="assets/brochure/M7-Brochure.pdf" class="btn" target="_blank">Download Catalog</a>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Image Popup Modal -->
<div id="imagePopupOverlay" class="image-popup-overlay" onclick="closeImagePopup()">
    <div class="image-popup-content" onclick="event.stopPropagation()">
        <button class="image-popup-close" onclick="closeImagePopup()">×</button>
        <img id="popupImage" src="" alt="">
        <div id="popupTitle" class="image-popup-title"></div>
    </div>
</div>

<script>
// Image Popup Functions
function openImagePopup(imageSrc, productName) {
    const overlay = document.getElementById('imagePopupOverlay');
    const popupImage = document.getElementById('popupImage');
    const popupTitle = document.getElementById('popupTitle');
    
    popupImage.src = imageSrc;
    popupImage.alt = productName;
    popupTitle.textContent = productName;
    
    overlay.classList.add('active');
    document.body.style.overflow = 'hidden'; // Prevent background scrolling
}

function closeImagePopup() {
    const overlay = document.getElementById('imagePopupOverlay');
    overlay.classList.remove('active');
    document.body.style.overflow = 'auto'; // Restore scrolling
}

// Close popup with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeImagePopup();
    }
});

// Function to toggle details sections
function toggleDetails(elementId) {
    const element = document.getElementById(elementId);
    const button = event.target.closest('button');
    
    if (element.style.display === 'none' || element.style.display === '') {
        element.style.display = 'block';
        element.style.animation = 'slideDown 0.3s ease-out';
        button.style.opacity = '0.8';
    } else {
        element.style.display = 'none';
        button.style.opacity = '1';
    }
}

// Simple product search function - Show only matching products
function initProductSearch() {
    const searchInput = document.getElementById('productSearch');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();
            const productCards = document.querySelectorAll('.product-card');
            
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
                `;
                noResultsMsg.innerHTML = `
                    <i class="fas fa-search" style="font-size: 3rem; color: #cbd5e1; margin-bottom: 1rem;"></i>
                    <h3 style="color: #374151; margin-bottom: 0.5rem;">No products found</h3>
                    <p>Try adjusting your search terms or clear the search to browse all products.</p>
                `;
                searchResultsGrid.appendChild(noResultsMsg);
            }
        });
        
        // Add search icon and clear button
        const searchContainer = searchInput.parentElement;
        searchContainer.style.position = 'relative';
        
        // Add search icon
        const searchIcon = document.createElement('i');
        searchIcon.className = 'fas fa-search';
        searchIcon.style.cssText = `
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            pointer-events: none;
        `;
        searchContainer.appendChild(searchIcon);
        
        // Add padding to input for icon
        searchInput.style.paddingLeft = '45px';
        
        // Add clear button
        const clearButton = document.createElement('button');
        clearButton.innerHTML = '×';
        clearButton.style.cssText = `
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #9ca3af;
            cursor: pointer;
            display: none;
        `;
        clearButton.onclick = function() {
            searchInput.value = '';
            searchInput.dispatchEvent(new Event('input'));
            clearButton.style.display = 'none';
        };
        searchContainer.appendChild(clearButton);
        
        // Show/hide clear button based on input
        searchInput.addEventListener('input', function() {
            clearButton.style.display = this.value ? 'block' : 'none';
        });
    }
}

// Initialize product search and filter functionality
document.addEventListener('DOMContentLoaded', function() {
    initProductSearch();
    
    // Add CSS animation for smooth transitions
    const styleElement = document.createElement('style');
    styleElement.textContent = `
        @keyframes slideDown {
            from {
                opacity: 0;
                max-height: 0;
                padding-top: 0;
                padding-bottom: 0;
            }
            to {
                opacity: 1;
                max-height: 500px;
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
        }
        
        .details-section {
            transition: all 0.3s ease-out;
        }
        
        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: all 0.2s ease;
        }
    `;
    document.head.appendChild(styleElement);
});
</script>

<?php include 'includes/footer.php'; ?>
