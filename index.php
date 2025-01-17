<?php
require 'func.php';
// Assume that $_SERVER['REQUEST_URI'] returns a full URI
$uri = $_SERVER['REQUEST_URI'];

// Strip query parameters if any
$uri = strtok($uri, '?');

// Route to the correct controller based on the URI
if ($uri === '/dashboard/website/demo/') {
    require 'controller/index.php'; // Your main page
}  
else if ($uri === '/dashboard/website/demo/calendar') {  
    require 'controller/calendar.php'; // Calendar page
}
else if ($uri === '/dashboard/website/demo/about') {
    require 'controller/about.php'; // About page
} 
else {
    // If no valid route is found, you can display a 404 page or redirect
    echo "Page not found.";
}
