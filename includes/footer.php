<footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>M7 Technology Solutions, Inc.</h3>
                    <p>Innovative Solutions, Excellence in Service</p>
                    <div class="social-links">
                        <a href="mailto:semicon@m7group.com.ph" class="social-link" title="Email Us (Semiconductor)"><i class="fas fa-envelope"></i></a>
                        <a href="https://www.facebook.com/M7TechnologySolutions" target="_blank" class="social-link" title="Follow us on Facebook"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
                
                <?php
                // Determine if we're in a subdirectory for footer links
                $is_in_companies = (basename(dirname($_SERVER['PHP_SELF'])) === 'companies');
                $base_path = $is_in_companies ? '../' : '';
                ?>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo $base_path; ?>index.php">Home</a></li>
                        <li><a href="<?php echo $base_path; ?>about.php">About Us</a></li>
                        <li><a href="<?php echo $base_path; ?>products.php">Products</a></li>
                        <li><a href="<?php echo $base_path; ?>contact.php">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>M7 Group of Companies</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo $base_path; ?>companies/m7-technology.php">M7 Technology Solutions</a></li>
                        <li><a href="<?php echo $base_path; ?>companies/m7-movers.php">M7 Movers</a></li>
                        <li><a href="<?php echo $base_path; ?>companies/m7-pcis.php">M7 PCIS</a></li>
                        <li><a href="<?php echo $base_path; ?>companies/m7-orion.php">M7 Orion</a></li>
                        <li><a href="<?php echo $base_path; ?>companies/m7-builders.php">M7 Builders</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i> Manila Head Office:<br>
                        Block 4-C Lot 35, Silver St, Sapphire Hills,<br>
                        Victoria Homes Subd. Tunasan 1773, Muntinlupa</p>
                        
                        <p><i class="fas fa-map-marker-alt"></i> Cebu Satellite Office:<br>
                        Room 609 building 203, SaekyungVillage<br>
                        SaekyungCondominium, 6015 Basak-MarigondonRd,<br>
                        Lapu-LapuCity, Cebu</p>
                        
                        <p><i class="fas fa-phone"></i> Manila: +632 8294-3316<br>
                        Cebu: +6332 234 5748</p>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> M7 Technology Solutions, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <button id="backToTop" class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </button>
    
    <script src="<?php echo getBasePath(); ?>assets/js/script.js?v=<?php echo time(); ?>"></script>
</body>
</html>
