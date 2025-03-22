<?php
// List of search engines
$searchEngines = [
    "https://search.inetol.net/",
    "https://searx.tiekoetter.com/",
    "https://priv.au/",
    "https://search.rhscz.eu/",
    "https://search.hbubli.cc/",
    "https://search.ipv6s.net/",
    "https://searx.oloke.xyz/",
    "https://search.ononoki.org/",
    "https://searxng.world/",
    "https://search.im-in.space/",
    "https://search.canine.tools/",
    "https://search.sapti.me/",
    "https://baresearch.org/",
    "https://www.gruble.de/",
    "https://searx.tuxcloud.net/",
    "https://opnxng.com/",
    "https://search.mdosch.de/",
    "https://search.mdosch.de/",
    "https://searxng.f24o.zip/",
    "https://search.citw.lgbt/"
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
