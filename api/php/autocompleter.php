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
$query = $_GET['q'] ?? '';
$query = trim($query);

// Validate and encode query
$encodedQuery = rawurlencode($query);

// Pick a random search engine efficiently
$selectedEngine = $searchEngines[array_rand($searchEngines)];

// Build URL safely
$searchUrl = $selectedEngine . "autocompleter?q=" . $encodedQuery;

// Redirect to search URL
header("Location: $searchUrl", true, 302);
exit;
