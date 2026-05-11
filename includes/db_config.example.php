<?php
// Copy this file to db_config.php and fill in your credentials

$is_hostinger = (
    (isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST'] !== 'localhost' && !strpos($_SERVER['HTTP_HOST'], '127.0.0.1')) ||
    (isset($_SERVER['DOCUMENT_ROOT']) && strpos($_SERVER['DOCUMENT_ROOT'], 'public_html') !== false)
);

if ($is_hostinger) {
    $db_config = [
        'host'     => 'localhost',
        'username' => 'YOUR_HOSTINGER_DB_USER',
        'password' => 'YOUR_HOSTINGER_DB_PASSWORD',
        'database' => 'YOUR_HOSTINGER_DB_NAME',
        'charset'  => 'utf8mb4'
    ];
} else {
    $db_config = [
        'host'     => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'm7_website',
        'charset'  => 'utf8mb4'
    ];
}
