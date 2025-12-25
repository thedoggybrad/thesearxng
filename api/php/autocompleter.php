<?php
// List of search engines
$searchEngines = [
    "https://searx.tiekoetter.com/",
    "https://search.rhscz.eu/",
    "https://searx.rhscz.eu/",
    "https://search.hbubli.cc/",
    "https://searx.stream/",
    "https://search.im-in.space/",
    "https://searx.tuxcloud.net/",
    "https://etsi.me/"
];

// Extract query parameter from the URL
if (isset($_GET['q'])) {
    $query = $_GET['q'];
    
    // Validate and encode query
    $encodedQuery = urlencode($query);
    
    // Choose a random search engine
    $randomIndex = array_rand($searchEngines);
    $selectedEngine = $searchEngines[$randomIndex];
    
    // Build the search URL
    $searchUrl = $selectedEngine . "autocompleter?q=" . $encodedQuery;
    
    // Redirect to the search URL
    header("Location: " . $searchUrl);
    exit();
}
?>
