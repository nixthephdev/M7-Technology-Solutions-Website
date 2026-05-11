<?php
// Function to get the correct base path for assets
function getBasePath() {
    // Check if we're in a subdirectory (like companies/)
    $currentDir = dirname($_SERVER['PHP_SELF']);
    
    // If we're in the root or a direct subdirectory, use relative paths
    if ($currentDir === '/' || $currentDir === '') {
        return './';
    } elseif (basename($currentDir) === 'companies' || basename($currentDir) === 'admin') {
        return '../';
    } else {
        return './';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?>M7 Technology Solutions, Inc.</title>
    <link rel="icon" type="image/png" href="<?php echo getBasePath(); ?>images/m7-logo.png">
    <link rel="shortcut icon" type="image/png" href="<?php echo getBasePath(); ?>images/m7-logo.png">
    <link rel="apple-touch-icon" href="<?php echo getBasePath(); ?>images/m7-logo.png">
    <link rel="stylesheet" href="<?php echo getBasePath(); ?>assets/css/style.css?v=<?php echo time(); ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="<?php echo getBasePath(); ?>images/m7-logo.png" alt="M7 Technology Solutions" class="logo-img">
                    <div class="logo-text">
                        <h1>M7 Technology Solutions, Inc.</h1>
                        <p>Innovative Solutions, Excellence in Service</p>
                    </div>
                </div>
                <nav class="nav">
                    <?php 
                    // Determine the correct path for nav.php based on current directory
                    $nav_path = (basename(dirname($_SERVER['PHP_SELF'])) === 'companies') ? '../includes/nav.php' : 'includes/nav.php';
                    include $nav_path; 
                    ?>
                </nav>
                <div class="mobile-menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
