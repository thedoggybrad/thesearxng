<?php

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
    "https://search.2b9t.xyz/",
    "https://searx.party/",
    "https://etsi.me/",
    "https://searx.perennialte.ch/"
];

// Extract query parameter from the URL
$query = $_GET['q'] ?? '';

// Pick random engine safely
$engine = $searchEngines[array_rand($searchEngines)];

// Ensure proper query building
$searchUrl = rtrim($engine, '') . 'search?' . http_build_query(['q' => $query]);

// Redirect to search URL
header("Location: $searchUrl", true, 302);
exit;
