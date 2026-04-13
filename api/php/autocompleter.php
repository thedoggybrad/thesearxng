<?php
// List of search engines
$searchEngines = [
    "https://search.rhscz.eu/",
    "https://searx.rhscz.eu/",
    "https://search.bladerunn.in/",
    "https://searx.tiekoetter.com/",
    "https://searxng.site/",
    "https://search.hbubli.cc/",
    "https://search.2b9t.xyz/",
    "https://searx.party/",
    "https://etsi.me/",
    "https://searx.perennialte.ch/"
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
