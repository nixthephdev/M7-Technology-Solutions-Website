<?php 
$page_title = "Contact Us";
include 'includes/header.php';
include 'includes/db_config.php';

// Handle form submission
$message = '';
$message_type = '';

if ($_POST) {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $company = htmlspecialchars(trim($_POST['company'] ?? ''));
    $subject = htmlspecialchars(trim($_POST['subject'] ?? ''));
    $inquiry = htmlspecialchars(trim($_POST['message'] ?? ''));
    
    // Basic validation
    if (empty($name) || empty($email) || empty($inquiry)) {
        $message = 'Please fill in all required fields.';
        $message_type = 'error';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Please enter a valid email address.';
        $message_type = 'error';
    } elseif (strlen($inquiry) < 10) {
        $message = 'Please provide a more detailed message (minimum 10 characters).';
        $message_type = 'error';
    } else {
        // Prepare data for database
        $contactData = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'company' => $company,
            'subject' => $subject,
            'message' => $inquiry
        ];
        
        // Save to database
        $messageId = saveContactMessage($contactData);
        
        if ($messageId) {
            $message = 'Thank you for your inquiry! We have received your message and will get back to you soon. Reference ID: #' . str_pad($messageId, 6, '0', STR_PAD_LEFT);
            $message_type = 'success';
            
            // Clear form data on success
            $name = $email = $phone = $company = $subject = $inquiry = '';
            
        } else {
            $message = 'Sorry, there was an error processing your message. Please try again or contact us directly.';
            $message_type = 'error';
        }
    }
}
?>

<main>
    <!-- Hero Section -->
    <section class="hero-banner" style="height: 300px;">
        <div class="banner-slide active">
            <div class="banner-content">
                <h2>Contact Us</h2>
                <p>Get in touch with M7 Technology Solutions for all your business needs</p>
            </div>
        </div>
    </section>

    <?php if ($message): ?>
    <div class="container" style="margin-top: 2rem;">
        <div class="alert alert-<?php echo $message_type; ?>" style="padding: 1rem; border-radius: 8px; margin-bottom: 2rem; text-align: center; <?php echo $message_type === 'success' ? 'background: #d1fae5; color: #065f46; border: 1px solid #a7f3d0;' : 'background: #fee2e2; color: #991b1b; border: 1px solid #fca5a5;'; ?>">
            <?php echo $message; ?>
        </div>
    </div>
    <?php endif; ?>

    <!-- How to Contact Us Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">How to Contact Us</h2>
            <p class="section-subtitle fade-in">Choose your preferred way to get in touch with M7 Technology Solutions</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin: 3rem 0;">
                <!-- Contact Form Option -->
                <div class="company-card fade-in">
                    <div class="company-logo">
                        <i class="fas fa-edit"></i>
                    </div>
                    <h3>Contact Form</h3>
                    <p>Fill out our online form below for detailed inquiries. We'll respond within 24 hours.</p>
                    <div style="margin-top: 1rem;">
                        <a href="#contact-form" class="btn btn-primary">Use Contact Form</a>
                    </div>
                </div>
                
                <!-- Email Option -->
                <div class="company-card fade-in">
                    <div class="company-logo">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p>Send us an email directly for quick questions or business inquiries.</p>
                    <div style="margin-top: 1rem;">
                        <a href="mailto:semicon@m7group.com.ph" class="btn btn-primary">Send Email</a>
                    </div>
                </div>
                
                <!-- Facebook Option -->
                <div class="company-card fade-in">
                    <div class="company-logo">
                        <i class="fab fa-facebook"></i>
                    </div>
                    <h3>Facebook Message</h3>
                    <p>Connect with us on Facebook for updates and quick messages.</p>
                    <div style="margin-top: 1rem;">
                        <a href="https://www.facebook.com/M7TechnologySolutions" target="_blank" class="btn btn-primary">Message on Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section id="contact-form" class="section" style="background: #f8fafc;">
        <div class="container">
            <h2 class="section-title fade-in">Send Us a Message</h2>
            <p class="section-subtitle fade-in">Have questions about our products or services? We'd love to hear from you.</p>
            
            <form method="POST" class="contact-form fade-in" id="contactForm">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" class="form-control" required value="<?php echo $name ?? ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" class="form-control" required value="<?php echo $email ?? ''; ?>">
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem;">
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" value="<?php echo $phone ?? ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" id="company" name="company" class="form-control" value="<?php echo $company ?? ''; ?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject" class="form-control">
                        <option value="">Select a subject</option>
                        <option value="product-inquiry" <?php echo (isset($subject) && $subject === 'product-inquiry') ? 'selected' : ''; ?>>Product Inquiry</option>
                        <option value="technical-support" <?php echo (isset($subject) && $subject === 'technical-support') ? 'selected' : ''; ?>>Technical Support</option>
                        <option value="partnership" <?php echo (isset($subject) && $subject === 'partnership') ? 'selected' : ''; ?>>Partnership Opportunities</option>
                        <option value="quotation" <?php echo (isset($subject) && $subject === 'quotation') ? 'selected' : ''; ?>>Request Quotation</option>
                        <option value="general" <?php echo (isset($subject) && $subject === 'general') ? 'selected' : ''; ?>>General Inquiry</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" class="form-control" rows="6" required placeholder="Please describe your inquiry in detail..."><?php echo $inquiry ?? ''; ?></textarea>
                </div>
                
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="section" style="background: #f8fafc;">
        <div class="container">
            <h2 class="section-title fade-in">Contact Information</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 3rem; margin: 3rem 0;">
                <!-- Manila Office -->
                <div class="company-card fade-in">
                    <div class="company-logo">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Manila Head Office</h3>
                    <div class="contact-page-info">
                        <p><i class="fas fa-map-marker-alt"></i> 
                        Block 4-C Lot 35, Silver St, Sapphire Hills,<br>
                        Victoria Homes Subd. Tunasan 1773, Muntinlupa</p>
                        
                        <p><i class="fas fa-phone"></i> +632 8294-3316</p>

                        <p><i class="fas fa-envelope"></i> semicon@m7group.com.ph<br>healthcare@m7group.com.ph</p>
                        
                        <p><i class="fas fa-clock"></i> 
                        Monday - Friday: 8:00 AM - 5:00 PM<br>
                        Saturday: 8:00 AM - 12:00 PM</p>
                    </div>
                </div>
                
                <!-- Cebu Office -->
                <div class="company-card fade-in">
                    <div class="company-logo">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Cebu Satellite Office</h3>
                    <div class="contact-page-info">
                        <p><i class="fas fa-map-marker-alt"></i> 
                        Room 609 building 203, SaekyungVillage<br>
                        SaekyungCondominium, 6015 Basak-MarigondonRd,<br>
                        Lapu-LapuCity, Cebu</p>
                        
                        <p><i class="fas fa-phone"></i> +6332 234 5748</p>

                        <p><i class="fas fa-envelope"></i> semicon@m7group.com.ph<br>healthcare@m7group.com.ph</p>
                        
                        <p><i class="fas fa-clock"></i> 
                        Monday - Friday: 8:00 AM - 5:00 PM<br>
                        Saturday: 8:00 AM - 12:00 PM</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Personnel Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">Key Personnel</h2>
            <p class="section-subtitle fade-in">Get in touch with our leadership team directly</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin: 3rem 0;">
                <div class="company-card fade-in">
                    <div class="company-logo">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Gerardo Dela Cruz</h3>
                    <p><strong>General Manager</strong></p>
                    <div class="contact-page-info">
                        <p><i class="fas fa-mobile-alt"></i> +63 917 575 1868</p>
                        <p><i class="fas fa-envelope"></i> gdelacruz@m7group.com.ph
</p>
                    </div>
                </div>
                
                <div class="company-card fade-in">
                    <div class="company-logo">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Arman Cruz</h3>
                    <p><strong>Deputy Manager</strong></p>
                    <div class="contact-page-info">
                        <p><i class="fas fa-mobile-alt"></i> +63 917 300 8435</p>
                        <p><i class="fas fa-envelope"></i> acruz@m7group.com.ph</p>
                    </div>
                </div>
                
                <div class="company-card fade-in">
                    <div class="company-logo">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>Chery May Galido</h3>
                    <p><strong>Finance Manager</strong></p>
                    <div class="contact-page-info">
                        <p><i class="fas fa-mobile-alt"></i> +63 917 575 0028 </p>
                        <p><i class="fas fa-envelope"></i> cfo@m7group.com.ph</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Brochure Section -->
    <section class="section" style="background: #f8fafc;">
        <div class="container">
            <div style="text-align: center; padding: 3rem 0;">
                <h2 class="section-title fade-in">Download Our Brochures</h2>
                <p class="section-subtitle fade-in">Download our brochures to learn more about M7 Group of Companies</p>
                <div class="fade-in" style="display: flex; justify-content: center; gap: 1.5rem; flex-wrap: wrap; margin-top: 1.5rem;">
                    <a href="brochure/M7Profile.pdf" class="btn btn-primary" target="_blank">
                        <i class="fas fa-download"></i> Semiconductor Product Line-up
                    </a>
                    <a href="brochure/M7Healthcare.pdf" class="btn btn-primary" target="_blank">
                        <i class="fas fa-download"></i> M7 Healthcare Company Profile
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Maps Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title fade-in">Find Us</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 2rem; margin: 3rem 0;">
                <div class="company-card fade-in">
                    <h3>Manila Office Location</h3>
                    <div style="height: 300px; border-radius: 8px; margin-bottom: 1rem; overflow: hidden;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.7234567890123!2d121.0509!3d14.4076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDI0JzI3LjQiTiAxMjHCsDAzJzAzLjIiRQ!5e1!3m2!1sen!2sph!4v1234567890123!5m2!1sen!2sph&q=Block+4-C+Lot+35,+Silver+St,+Sapphire+Hills,+Victoria+Homes+Subd.+Tunasan+1773,+Muntinlupa"
                            width="100%" 
                            height="300" 
                            style="border:0; border-radius: 8px;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div style="text-align: center; margin-top: 1rem;">
                        <a href="https://maps.google.com/?q=Block+4-C+Lot+35,+Silver+St,+Sapphire+Hills,+Victoria+Homes+Subd.+Tunasan+1773,+Muntinlupa" 
                           target="_blank" class="btn btn-primary" style="font-size: 0.9rem; padding: 0.5rem 1rem;">
                            <i class="fas fa-external-link-alt"></i> Open in Google Maps
                        </a>
                    </div>
                </div>
                
                <div class="company-card fade-in">
                    <h3>Cebu Office Location</h3>
                    <div style="height: 300px; border-radius: 8px; margin-bottom: 1rem; overflow: hidden;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.1234567890123!2d123.9494!3d10.3103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDE4JzM3LjEiTiAxMjPCsDU2JzU3LjgiRQ!5e1!3m2!1sen!2sph!4v1234567890123!5m2!1sen!2sph&q=Room+609+building+203,+SaekyungVillage+SaekyungCondominium,+6015+Basak-MarigondonRd,+Lapu-LapuCity,+Cebu"
                            width="100%" 
                            height="300" 
                            style="border:0; border-radius: 8px;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div style="text-align: center; margin-top: 1rem;">
                        <a href="https://maps.google.com/?q=Room+609+building+203,+SaekyungVillage+SaekyungCondominium,+6015+Basak-MarigondonRd,+Lapu-LapuCity,+Cebu" 
                           target="_blank" class="btn btn-primary" style="font-size: 0.9rem; padding: 0.5rem 1rem;">
                            <i class="fas fa-external-link-alt"></i> Open in Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
