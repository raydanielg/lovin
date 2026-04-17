<?php
/**
 * Glovin Limited - Nginx Entry Point
 * This file should be placed in the root directory (public_html)
 * It redirects all requests to the public/ folder
 * 
 * For Apache: Use .htaccess rewrite rules
 * For Nginx: This file + proper document root configuration
 */

// Security: Don't expose if already in public folder
if (strpos($_SERVER['REQUEST_URI'], '/public/') === 0) {
    // Check if we're actually inside public folder already
    $publicDir = __DIR__ . '/public';
    if (is_dir($publicDir)) {
        // Serve the file directly
        $requestUri = preg_replace('#^/public/#', '', $_SERVER['REQUEST_URI']);
        $targetFile = $publicDir . '/' . $requestUri;
        
        if (is_file($targetFile)) {
            // Serve static file
            $mimeTypes = [
                'css' => 'text/css',
                'js' => 'application/javascript',
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
                'json' => 'application/json',
                'xml' => 'application/xml',
            ];
            
            $ext = pathinfo($targetFile, PATHINFO_EXTENSION);
            if (isset($mimeTypes[$ext])) {
                header('Content-Type: ' . $mimeTypes[$ext]);
            }
            
            readfile($targetFile);
            exit;
        }
    }
}

// Redirect to public/index.php
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$uri = $_SERVER['REQUEST_URI'] ?? '/';

// Remove any /public/ from the URI if present
$uri = preg_replace('#^/public/?#', '/', $uri);

// Build the target URL
$targetUrl = $protocol . $host . '/public' . $uri;

// Perform redirect
header('Location: ' . $targetUrl, true, 301);
exit;
