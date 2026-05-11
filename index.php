<?php 
$page_title = "Home";
include 'includes/header.php'; 
?>

<main>
    <!-- Hero Banner Section -->
    <section class="hero-banner">
        <?php
        // Banner images array
        $banner_images = [
            'banner-1.png',
            'banner-2.png',
            'banner-3.png',
            'banner-4.png',
            'banner-5.png'
        ];
        
        // Banner content for each slide
        $banner_content = [
            [
                'title' => 'M7 Technology Solutions, Inc.',
                'subtitle' => 'Innovative Solutions, Excellence in Service - Leading provider of semiconductor equipment, consumables, and healthcare technology solutions',
                'button_text' => 'Learn More',
                'button_link' => 'companies/m7-technology.php'
            ],
            [
                'title' => 'M7 Movers Warehouse and General Services, Inc.',
                'subtitle' => 'Professional moving, warehousing, and logistics solutions with reliable and efficient service',
                'button_text' => 'View Services',
                'button_link' => 'companies/m7-movers.php'
            ],
            [
                'title' => 'M7 Philippine Cambridge International School',
                'subtitle' => 'Empowering students through Unity, Integrity, and Growth - International education excellence',
                'button_text' => 'Discover School',
                'button_link' => 'companies/m7-pcis.php'
            ],
            [
                'title' => 'M7 Orion Energy Trading and General Services, Inc.',
                'subtitle' => 'Innovative energy solutions and trading services for sustainable business growth',
                'button_text' => 'Explore Energy Solutions',
                'button_link' => 'companies/m7-orion.php'
            ],
            [
                'title' => 'M7 Builders and Construction Services, Inc.',
                'subtitle' => 'Quality construction and building services with Filipino craftsmanship and modern techniques',
                'button_text' => 'View Projects',
                'button_link' => 'companies/m7-builders.php'
            ]
        ];
        ?>
        
        <?php foreach ($banner_images as $index => $image): ?>
        <div class="banner-slide <?php echo $index === 0 ? 'active' : ''; ?>" style="background-image: url('images/Products/bannersx/<?php echo $image; ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="banner-overlay"></div>
            <div class="banner-content">
                <h2><?php echo $banner_content[$index]['title']; ?></h2>
                <p><?php echo $banner_content[$index]['subtitle']; ?></p>
                <a href="<?php echo $banner_content[$index]['button_link']; ?>" class="btn"><?php echo $banner_content[$index]['button_text']; ?></a>
            </div>
        </div>
        <?php endforeach; ?>
        
        <div class="banner-nav">
            <?php foreach ($banner_images as $index => $image): ?>
            <span class="banner-dot <?php echo $index === 0 ? 'active' : ''; ?>" data-slide="<?php echo $index; ?>"></span>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Company Overview Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">What does M7 Group of Companies offer?</h2>
            <p class="section-subtitle fade-in">M7 Group of Companies provides comprehensive solutions across multiple industries, from semiconductor technology to education, construction, and logistics. We are committed to delivering innovative solutions with excellence in service.</p>
            
            <div class="company-grid fade-in">
                <div class="company-card">
                    <div class="company-logo">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3>Technology Solutions</h3>
                    <p>Semiconductor equipment, consumables, and healthcare technology solutions</p>
                </div>
                
                <div class="company-card">
                    <div class="company-logo">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Logistics & Moving</h3>
                    <p>Professional warehouse and general moving services</p>
                </div>
                
                <div class="company-card">
                    <div class="company-logo">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Education</h3>
                    <p>International school providing world-class education</p>
                </div>
                
                <div class="company-card">
                    <div class="company-logo">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Energy Trading</h3>
                    <p>Energy trading and general services solutions</p>
                </div>
                
                <div class="company-card">
                    <div class="company-logo">
                        <i class="fas fa-hammer"></i>
                    </div>
                    <h3>Construction</h3>
                    <p>Professional building and construction services</p>
                </div>
            </div>
        </div>
    </section>

    <!-- M7 Group of Companies Section -->
    <section id="companies" class="section" style="background: #f8fafc;">
        <div class="container">
            <h2 class="section-title fade-in">M7 Group of Companies</h2>
            <p class="section-subtitle fade-in">Explore our diverse portfolio of companies serving various industries</p>
            
            <div class="company-grid fade-in">
                <a href="companies/m7-technology.php" class="company-card">
                    <div class="company-logo">
                        <img src="images/companies/M7 TECH LOGO-02.png" alt="M7 Technology Solutions" style="max-width: 100%; max-height: 80px; object-fit: contain;">
                    </div>
                    <h3>M7 Technology Solutions, Inc.</h3>
                    <p>Semiconductor and Healthcare Solutions</p>
                </a>
                
                <a href="companies/m7-movers.php" class="company-card">
                    <div class="company-logo">
                        <img src="images/companies/M7 MOVERS-02.png" alt="M7 Movers" style="max-width: 100%; max-height: 80px; object-fit: contain;">
                    </div>
                    <h3>M7 Movers Warehouse and General Services, Inc.</h3>
                    <p>Professional Moving and Logistics</p>
                </a>
                
                <a href="companies/m7-pcis.php" class="company-card">
                    <div class="company-logo">
                        <img src="images/companies/M7 PCIS.png" alt="M7 PCIS School" style="max-width: 100%; max-height: 80px; object-fit: contain;">
                    </div>
                    <h3>M7 Philippine Cambridge International School</h3>
                    <p>International Education Excellence</p>
                </a>
                
                <a href="companies/m7-orion.php" class="company-card">
                    <div class="company-logo">
                        <img src="images/companies/M7 ORION-02.png" alt="M7 Orion Energy" style="max-width: 100%; max-height: 80px; object-fit: contain;">
                    </div>
                    <h3>M7 Orion Energy Trading and General Services, Inc.</h3>
                    <p>Energy Solutions and Trading</p>
                </a>
                
                <a href="companies/m7-builders.php" class="company-card">
                    <div class="company-logo">
                        <img src="images/companies/M7 BUILDERS.png" alt="M7 Builders" style="max-width: 100%; max-height: 80px; object-fit: contain;">
                    </div>
                    <h3>M7 Builders and Construction Services, Inc.</h3>
                    <p>Construction and Building Services</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">Our Products & Services</h2>
            <p class="section-subtitle fade-in">Comprehensive solutions for semiconductor, healthcare, and industrial applications</p>
            
            <div class="product-categories fade-in">
                <a href="products.php#dicing" class="category-card">
                    <div class="category-image">
                        <i class="fas fa-cut"></i>
                    </div>
                    <div class="category-content">
                        <h3>Dicing Products</h3>
                        <p>Precision dicing blades, consumables, and spare parts for semiconductor manufacturing</p>
                        <span class="btn btn-primary">View Products</span>
                    </div>
                </a>
                
                <a href="products.php#equipment" class="category-card">
                    <div class="category-image">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div class="category-content">
                        <h3>Equipment</h3>
                        <p>Advanced industrial equipment including plasma cleaning systems and laser marking machines</p>
                        <span class="btn btn-primary">View Equipment</span>
                    </div>
                </a>
                
                <a href="products.php#inspection" class="category-card">
                    <div class="category-image">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="category-content">
                        <h3>Inspection Tools</h3>
                        <p>Precision microscopes and inspection equipment for quality control</p>
                        <span class="btn btn-primary">View Tools</span>
                    </div>
                </a>
                
                <a href="products.php#esd" class="category-card">
                    <div class="category-image">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="category-content">
                        <h3>ESD Products</h3>
                        <p>Comprehensive ESD protection solutions including consumables and equipment</p>
                        <span class="btn btn-primary">View ESD Products</span>
                    </div>
                </a>
            </div>
            
            <div style="text-align: center; margin-top: 2rem;">
                <a href="products.php" class="btn btn-primary">View All Products</a>
            </div>
        </div>
    </section>

    <!-- Active Partners Section -->
    <section class="section" style="background: #f8fafc;">
        <div class="container">
            <h2 class="section-title fade-in">Our Partners</h2>
            <p class="section-subtitle fade-in">We work with leading companies to deliver the best solutions</p>
            
            <?php
            // Partner logos array
            $partner_logos = [
                'AP&T.webp',
                'CONVUM.webp', 
                'Delphi_logo.webp',
                'EOC-Logo.webp',
                'GOSMT.webp',
                'Koganei-Logo.webp',
                'RaySmart.webp',
                'READ.webp',
                'RiKO.webp',
                'SUNJE_BLUE.webp',
                'Teikoku.webp',
                'tetelaser.webp',
                'Ushio.webp',
                'Valtech.webp',
                'Zeiss.webp',
                'ZZSM.webp'
            ];
            ?>
            
            <div class="partners-grid fade-in" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin: 3rem 0; align-items: center;">
                <?php foreach ($partner_logos as $logo): ?>
                <div class="partner-logo-container" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; align-items: center; justify-content: center; height: 120px;">
                    <img src="images/client/<?php echo $logo; ?>"
                         alt="<?php echo pathinfo($logo, PATHINFO_FILENAME); ?>" 
                         style="max-width: 100%; max-height: 80px; object-fit: contain; transition: transform 0.3s ease;"
                         onmouseover="this.style.transform='scale(1.05)'; this.parentElement.style.transform='translateY(-5px)'; this.parentElement.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'"
                         onmouseout="this.style.transform='scale(1)'; this.parentElement.style.transform='translateY(0)'; this.parentElement.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Our Customers Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">Our Customers</h2>
            <p class="section-subtitle fade-in">Trusted by leading companies across various industries worldwide</p>
            
            <?php
            // Customer logos array
            $customer_logos = [
                'Amertron.webp',
                'Amkor.webp',
                'Auto.jpg',
                'Cebu.jpg',
                'Cirtek.webp',
                'Excilitas.webp',
                'Fastech.webp',
                'Fiber.webp',
                'Fuji.jpg',
                'Fuse.webp',
                'Ikea.webp',
                'Imi.webp',
                'Infineon.webp',
                'IXYS.webp',
                'KPC.webp',
                'Maxim.webp',
                'Micro.webp',
                'Microsemi.webp',
                'Mine.webp',
                'Murata.webp',
                'Shin.webp',
                'Siemen.webp',
                'SM.jpg',
                'ST.webp',
                'Taiyo.webp',
                'Team.webp',
                'Vishay.webp',
                'Western.webp'
            ];
            ?>
            
            <div class="customers-grid fade-in" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin: 3rem 0; align-items: center;">
                <?php foreach ($customer_logos as $logo): ?>
                <div class="customer-logo-container" style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; align-items: center; justify-content: center; height: 120px;">
                    <img src="images/customers/<?php echo $logo; ?>"
                         alt="<?php echo pathinfo($logo, PATHINFO_FILENAME); ?>" 
                         style="max-width: 100%; max-height: 80px; object-fit: contain; transition: transform 0.3s ease;"
                         onmouseover="this.style.transform='scale(1.05)'; this.parentElement.style.transform='translateY(-5px)'; this.parentElement.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'"
                         onmouseout="this.style.transform='scale(1)'; this.parentElement.style.transform='translateY(0)'; this.parentElement.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="section" style="background: #f8fafc;">
        <div class="container">
            <div style="text-align: center; padding: 3rem 0;">
                <h2 class="section-title fade-in">Ready to Work with Us?</h2>
                <p class="section-subtitle fade-in">Get in touch to discuss your requirements and discover how M7 can help your business grow</p>
                <div class="fade-in">
                    <a href="contact.php" class="btn btn-primary" style="margin-right: 1rem;">Contact Us</a>
                    <a href="assets/brochure/M7-Brochure.pdf" class="btn" target="_blank">Download Brochure</a>
                </div>
            </div>
        </div>
    </section>
</main>

<!--test comment for my footer just to be sure -->

<!-- for update nothing unusual needs an update for my foote 05/12/26 -->

<?php include 'includes/footer.php'; ?>
