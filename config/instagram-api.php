<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

function getInstagramPhotoUrl($postUrl) {
    // Extract the shortcode from the URL (p/shortcode/)
    preg_match('/instagram\.com\/p\/([^\/\?]+)/', $postUrl, $matches);
    if (!isset($matches[1])) {
        return null;
    }
    
    $shortcode = $matches[1];
    
    // Initialize cURL session
    $ch = curl_init("https://www.instagram.com/p/" . $shortcode . "/");
    
    // Set cURL options
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36',
        CURLOPT_ENCODING => '',
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HTTPHEADER => [
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
            'Accept-Language: en-US,en;q=0.5',
            'Cache-Control: no-cache',
            'Pragma: no-cache'
        ]
    ]);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode !== 200 || empty($response)) {
        return null;
    }
    
    // Look for image URL in the HTML response
    if (preg_match('/"display_url":"([^"]+)"/', $response, $matches)) {
        return stripslashes($matches[1]);
    }
    
    // Fallback: try to find og:image
    if (preg_match('/<meta property="og:image" content="([^"]+)"/', $response, $matches)) {
        return html_entity_decode($matches[1]);
    }
    
    return null;
}

// Get the Instagram post URL from the query string
$instagramUrl = isset($_GET['url']) ? $_GET['url'] : '';

if (empty($instagramUrl)) {
    echo json_encode([
        'success' => false,
        'message' => 'Instagram URL is required'
    ]);
    exit;
}

// Get the photo URL
$imageUrl = getInstagramPhotoUrl($instagramUrl);

if ($imageUrl) {
    echo json_encode([
        'success' => true,
        'imageUrl' => $imageUrl
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Unable to fetch the Instagram photo'
    ]);
}
