<?php
// Determine if we're in a subdirectory
$is_in_companies = (basename(dirname($_SERVER['PHP_SELF'])) === 'companies');
$base_path = $is_in_companies ? '../' : '';
?>
<ul class="nav-menu">
    <li><a href="<?php echo $base_path; ?>index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">HOME</a></li>
    <li><a href="<?php echo $base_path; ?>about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">ABOUT US</a></li>
    <li class="dropdown">
        <a href="#" class="nav-link dropdown-toggle">M7 GROUP OF COMPANIES <i class="fas fa-chevron-down"></i></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo $base_path; ?>companies/m7-technology.php">M7 Technology Solutions</a></li>
            <li><a href="<?php echo $base_path; ?>companies/m7-movers.php">M7 Movers</a></li>
            <li><a href="<?php echo $base_path; ?>companies/m7-pcis.php">M7 PCIS</a></li>
            <li><a href="<?php echo $base_path; ?>companies/m7-orion.php">M7 Orion</a></li>
            <li><a href="<?php echo $base_path; ?>companies/m7-builders.php">M7 Builders</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="<?php echo $base_path; ?>products.php" class="nav-link dropdown-toggle <?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : ''; ?>">PRODUCTS <i class="fas fa-chevron-down"></i></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo $base_path; ?>products.php#dicing">Dicing Products</a></li>
            <li><a href="<?php echo $base_path; ?>products.php#equipment">Equipment</a></li>
            <li><a href="<?php echo $base_path; ?>products.php#inspection">Inspection</a></li>
            <li><a href="<?php echo $base_path; ?>products.php#esd">ESD Products</a></li>
            <li><a href="<?php echo $base_path; ?>products.php#services">Other Services</a></li>
        </ul>
    </li>
    <li><a href="<?php echo $base_path; ?>contact.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">CONTACT US</a></li>
</ul>
