<?php
// Path to the text file containing search engine URLs
$filePath = 'search_engines.txt';

// Read URLs from the file
if (file_exists($filePath)) {
    $searchEngines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
} else {
    // If the file does not exist, handle the error
    die("Critical Error: Call the attention of TheDoggyBrad Software Labs at admin@gosocial.x10.bz");
}

// Extract query parameter from the URL
if (isset($_GET['q'])) {
    $query = $_GET['q'];
    
    // Validate and encode query
    $encodedQuery = urlencode($query);
    
    // Choose a random search engine
    $randomIndex = array_rand($searchEngines);
    $selectedEngine = $searchEngines[$randomIndex];
    
    // Build the search URL
    $searchUrl = $selectedEngine . "search?q=" . $encodedQuery;
    
    // Redirect to the search URL
    header("Location: " . $searchUrl);
    exit();
} else {
    // If no query is set, redirect to the home page
    header("Location: /");
    exit();
}
?>
