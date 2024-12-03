<?php
// Database configuration
define("DB_HOST", "localhost");

// Site-wide constants
define("SITE_NAME", "My Website");
define("BASE_URL", "http://example.com");

// Error reporting (development only)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Include shared functions
require_once(__DIR__ . '/../functions/helpers.php');
?>