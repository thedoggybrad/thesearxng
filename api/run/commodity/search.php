<?php
// List of search engines
$searchEngines = [
    "https://priv.au/",
    "https://sx.zorby.top/",
    "https://search.hbubli.cc/",
    "https://searx.tiekoetter.com/",
    "https://paulgo.io/",
    "https://search.bus-hit.me/",
    "https://opnxng.com/",
    "https://search.indst.eu/",
    "https://searx.be/",
    "https://northboot.xyz/",
    "https://search.im-in.space/",
    "https://search.sapti.me/",
    "https://ooglester.com/",
    "https://etsi.me/",
    "https://search.blitzw.in/",
    "https://searx.namejeff.xyz/",
    "https://s.mble.dk/",
    "https://www.gruble.de/",
    "https://searx.work/",
    "https://search.smnz.de/",
    "https://search.citw.lgbt/",
    "https://search.ononoki.org/",
    "https://searx.daetalytica.io/",
    "https://copp.gg/",
    "https://searx.dresden.network/",
    "https://baresearch.org/",
    "https://search.rowie.at/",
    "https://skyrimhater.com/",
    "https://searx.sev.monster/",
    "https://search.charliewhiskey.net/",
    "https://searx.ro/",
    "https://searxng.brihx.fr/",
    "https://searx.mv-software.de/",
    "https://searx.colbster937.dev/",
    "https://searx.oakleycord.dev/",
    "https://searx.mxchange.org/",
    "https://searx.foss.family/"
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
    echo "Error: No search query provided.";
}
?>
