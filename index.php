<?php
/**
 * Laravel Application Entry Point
 * 
 * This file serves as the entry point when the application
 * is accessed from the root directory. It properly routes
 * all requests to the public folder.
 */

// Get the current request URI
$uri = $_SERVER['REQUEST_URI'] ?? '/';

// Remove query string from URI
$uri = strtok($uri, '?');

// Check if the request is for a file that exists in public
$publicFile = __DIR__ . '/public' . $uri;

// If it's an existing file in public folder, serve it directly
if ($uri !== '/' && file_exists($publicFile) && is_file($publicFile)) {
    // Determine content type based on file extension
    $extension = strtolower(pathinfo($publicFile, PATHINFO_EXTENSION));
    $mimeTypes = [
        'css' => 'text/css',
        'js' => 'application/javascript',
        'json' => 'application/json',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
        'svg' => 'image/svg+xml',
        'ico' => 'image/x-icon',
        'woff' => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf' => 'font/ttf',
        'eot' => 'application/vnd.ms-fontobject',
        'otf' => 'font/otf',
        'pdf' => 'application/pdf',
        'webp' => 'image/webp',
    ];
    
    if (isset($mimeTypes[$extension])) {
        header('Content-Type: ' . $mimeTypes[$extension]);
    }
    
    // Add cache headers for static assets
    if (in_array($extension, ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'ico', 'woff', 'woff2'])) {
        header('Cache-Control: public, max-age=31536000');
    }
    
    readfile($publicFile);
    exit;
}

// For all other requests, include the public index.php
require __DIR__ . '/public/index.php';
