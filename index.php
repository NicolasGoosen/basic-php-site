<?php
require_once('includes/config.php');

// Extract the requested path
$requestUri = trim($_SERVER['REQUEST_URI'], '/');

// Define valid routes, and map routes to page files
$routes = [
    '' => 'home',
    'contact' => 'contact',
    'services' => 'services',
    'gallery' => 'gallery',
];

echo $requestUri;

// Route to the appropriate file or 404
$page = $routes[$requestUri] ?? '404';
$pageTitle = ucfirst($page);

include('includes/header.php');
include("pages/$page.php");
include('includes/footer.php');
?>