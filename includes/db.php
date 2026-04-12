<?php
// Database credentials (your InfinityFree details)
define('DB_HOST', 'sql201.infinityfree.com');
define('DB_USER', 'if0_41644639');
define('DB_PASS', 'ezqe57AQZHNCSbv');
define('DB_NAME', 'sql201.infinityfree.com');
define('DB_CHARSET', 'utf8mb4');

// Site settings
define('SITE_NAME', 'The Akol Family');
define('SITE_URL', ''); // Leave empty if in root folder

// Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set charset
mysqli_set_charset($conn, DB_CHARSET);

// Set timezone
date_default_timezone_set('Africa/Kampala');
?>