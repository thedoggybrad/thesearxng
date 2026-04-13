<?php
// List of search engines
$searchEngines = [
    "https://search.rhscz.eu/",
    "https://searx.rhscz.eu/",
    "https://search.bladerunn.in/",
    "https://searx.tiekoetter.com/",
    "https://searxng.site/",
    "https://search.inetol.net/",
    "https://search.hbubli.cc/",
    "https://search.mdosch.de/",
    "https://ooglester.com/",
    "https://baresearch.org/",
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
    $searchUrl = $selectedEngine . "search?q=" . $encodedQuery;
    
    // Redirect to the search URL
    header("Location: " . $searchUrl);
    exit();
} else {
    // If no query is set, show an error or redirect to a default page
    header("Location: /"); // Redirects to the home page

}
?>
