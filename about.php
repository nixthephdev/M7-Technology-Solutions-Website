<?php 
$page_title = "About Us";
include 'includes/header.php'; 
?>

<main>
    <!-- Hero Section with Video -->
    <section class="hero-banner" style="height: 500px;">
        <video autoplay muted loop playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
            <source src="images/m7_video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="banner-overlay"></div>
        <div class="banner-slide active">
            <div class="banner-content">
                <h2>About M7 Group of Companies</h2>
                <p>Learn more about our history, values, and commitment to excellence</p>
            </div>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="section">
        <div class="container">
            <div class="fade-in">
                <h2 class="section-title">About M7 Group of Companies</h2>
                <p class="section-subtitle">M7 Group of Companies is a diversified business conglomerate established to provide innovative solutions across multiple industries. Founded with the vision of excellence and driven by Filipino values, we continue to expand our reach and impact in various sectors.</p>
            </div>
        </div>
    </section>

    <!-- Office Locations -->
    <section class="section" style="background: #f8fafc;">
        <div class="container">
            <h2 class="section-title fade-in">Our Office Locations</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 2rem; margin: 3rem 0;">
                <div class="company-card fade-in">
                    <div class="company-logo">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Manila Head Office</h3>
                    <p><strong>Address:</strong><br>
                    Block 4-C Lot 35, Silver St, Sapphire Hills,<br>
                    Victoria Homes Subd. Tunasan 1773, Muntinlupa</p>
                    <p><strong>Satellite Capture:</strong> Manila Office Location</p>
                </div>
                
                <div class="company-card fade-in">
                    <div class="company-logo">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Cebu Satellite Office</h3>
                    <p><strong>Address:</strong><br>
                    Room 609 building 203, SaekyungVillage<br>
                    SaekyungCondominium, 6015 Basak-MarigondonRd,<br>
                    Lapu-LapuCity, Cebu</p>
                    <p><strong>Satellite Capture:</strong> Cebu Office Location</p>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 2rem;">
                <p><strong>Contact:</strong> +632 7092-6427</p>
            </div>
        </div>
    </section>

    <!-- Organizational Chart -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">Organizational Chart</h2>
            
            <div class="org-chart fade-in" style="max-width: 800px; margin: 0 auto;">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin: 2rem 0;">
                    <div class="company-card">
                        <div class="company-logo">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3>Gerardo Dela Cruz</h3>
                        <p><strong>General Manager</strong></p>
                        <p>Mobile: +63 917 575 1868</p>
                        <p>Email: gdelacruz@m7group.com.ph</p>
                    </div>
                    
                    <div class="company-card">
                        <div class="company-logo">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3>Arman Cruz</h3>
                        <p><strong>Deputy Manager</strong></p>
                        <p>Mobile: +63 917 300 8435</p>
                        <p>Email: acruz@m7group.com.ph</p>
                    </div>
                    
                    <div class="company-card">
                        <div class="company-logo">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h3>Chery May Galido</h3>
                        <p><strong>Finance Manager</strong></p>
                        <p>Mobile: +63 917 757 0028</p>
                        <p>Email: cfo@m7group.com.ph</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission and Vision -->
    <section class="section" style="background: #f8fafc;">
        <div class="container">
            <h2 class="section-title fade-in">Mission and Vision</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 3rem; margin: 3rem 0;">
                <div class="company-card fade-in">
                    <div class="company-logo">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <ul style="text-align: left; color: #64748b; line-height: 1.8;">
                        <li>To continuously exceed our customers' ever-growing expectations, we will dedicate ourselves in the pursuit of incessant personal and systems improvement.</li>
                        <li>To actively maintain a capable and dedicated pool of employees, employee well-being will be at the forefront of our key plans and programs.</li>
                        <li>To generate sustainable growth and optimal returns, we will exercise prudence in all our resource management activities.</li>
                        <li>To progressively care for the society and the environment, a vibrant and dynamic corporate social responsibility program will be collectively undertaken by all members of the company.</li>
                    </ul>
                </div>
                
                <div class="company-card fade-in">
                    <div class="company-logo">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <div style="text-align: left; color: #64748b; line-height: 1.8;">
                        <p>Within the next five (5) years, we envision M7 Technology Solutions Inc. to be a first-rate industrial trading partner of key principals servicing the Philippine semiconductor, electronics and other market industry.</p>
                        <p>We aspire that working together as a team, we will build a company where great results are achieved beyond our exceptional individual capabilities. This we will accomplish by focusing all our actions within the context of the seven (7) Filipino values of being: honourable (marangal), humane (makatao), faithful (matapat), trustworthy (mapagkakatiwalaan), steadfast (matatag), resourceful (maparaan), and skillful (mahusay).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Message from the Founder -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">Message from the Founder</h2>
            
            <div class="company-card fade-in" style="max-width: 800px; margin: 0 auto;">
                <div class="company-logo">
                    <i class="fas fa-quote-left"></i>
                </div>
                <h3>Founder's Message</h3>
                <p style="font-style: italic; color: #64748b; line-height: 1.8;">
                    "Welcome to M7 Group of Companies. Since our establishment in 2012, we have been committed to providing innovative solutions and excellence in service across multiple industries. Our journey began with a simple vision: to create a company that not only delivers exceptional results but also embodies the finest Filipino values.
                    <br><br>
                    Today, as we continue to grow and expand our reach, we remain steadfast in our commitment to our customers, employees, and the communities we serve. Our success is built on the foundation of trust, integrity, and the unwavering dedication of our team.
                    <br><br>
                    Thank you for being part of our journey. Together, we will continue to build a brighter future."
                </p>
                <p style="text-align: right; margin-top: 2rem; font-weight: 600;">
                    - M7 Group of Companies Founder
                </p>
            </div>
        </div>
    </section>

<!-- 7 Filipino Core Values -->
    <section class="section" style="background: #f8fafc;">
        <div class="container">
            <h2 class="section-title fade-in">7 Filipino Core Values (7 M's)</h2>
            <p class="section-subtitle fade-in">Our company culture is built upon these seven fundamental Filipino values that guide our actions and decisions</p>
            
            <div class="values-grid fade-in">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-glasses"></i>
                    </div>
                    <h3>Makatao</h3>
                    <p>Eyeglass represents someone who is makatao through its symbolism of clarity, understanding, empathy, and connection. Just as eyeglasses allow one to see the world more clearly, a makatao person is someone who perceives and acts with compassion, focusing on the well-being of others and fostering meaningful connections.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lighthouse"></i>
                    </div>
                    <h3>Mapagkakatiwalaan</h3>
                    <p>Lighthouse represents someone who is mapagkakatiwalaan by embodying qualities like reliability, protection, guidance, consistency, and unwavering support. Just as a lighthouse serves as a trusted and constant guide for sailors, a mapagkakatiwalaan person offers the same kind of trust, dependability, and reassurance to those around them.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Mahusay</h3>
                    <p>Clock represents someone as mahusay by embodying qualities such as precision, reliability, efficiency, time management, and a commitment to continuous improvement, all of which are characteristics of a highly skilled and competent individual.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-columns"></i>
                    </div>
                    <h3>Matatag</h3>
                    <p>Pillar represents someone as matatag by symbolizing qualities like strength, resilience, reliability, and endurance. A matatag person, much like a pillar, stands firm through challenges and supports others with unwavering stability and commitment.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-dove"></i>
                    </div>
                    <h3>Matapat</h3>
                    <p>Dove represents someone who is matapat through its associations with peace, loyalty, purity, honesty, and compassion. Just as the dove symbolizes a gentle and trustworthy presence, a matapat person is known for their unwavering faithfulness, sincerity, and dedication to others.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h3>Maparaan</h3>
                    <p>Coconut Tree represents someone who is maparaan through its versatility, resilience, adaptability, and ability to provide valuable resources. Like the coconut tree, a maparaan person uses their creativity and resourcefulness to thrive, solve problems, and support both themselves and others.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Marangal</h3>
                    <p>Shield represents someone who is marangal by symbolizing qualities such as protection, courage, strength, nobility, and responsibility. Like a shield that defends and maintains honor, a marangal person upholds their values, defends what is just, and stands tall with dignity and respect.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section">
        <div class="container">
            <div style="text-align: center; padding: 3rem 0;">
                <h2 class="section-title fade-in">Join Our Journey</h2>
                <p class="section-subtitle fade-in">Discover how M7 Group of Companies can help your business grow with our innovative solutions and Filipino values</p>
                <div class="fade-in">
                    <a href="contact.php" class="btn btn-primary" style="margin-right: 1rem;">Get in Touch</a>
                    <a href="products.php" class="btn">View Our Products</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
