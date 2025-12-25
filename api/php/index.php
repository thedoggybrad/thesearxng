<?php
// INSTRUCTIONS FOR YOUR OWN DEPLOYMENT:
// FOR THE URL OF YOUR SITE, NAME THE ENVIRONMENT VARIABLE as CANONICAL_URL and put your own values there
// FOR THE GOOGLE VERIFICATION KEY, NAME THE ENVIRONMENT VARIABLE as GOOGLE_SITE_VERIFICATION and put your own values there
// FOR THE BING VERIFICATION KEY, NAME THE ENVIRONMENT VARIABLE as MSVALIDATE01 and put your own values there
// FOR THE IMAGE ASSETS, NAME THE ENVIRONMENT VARIABLES as appletouchicon, favicon32, favicon16, favicon, screenshot, iconlogo and put your own URLs there using the files from here https://github.com/thedoggybrad/thesearxng/tree/main/favicon
$baseUrl = getenv('CANONICAL_URL');
$googleverify = getenv('GOOGLE_SITE_VERIFICATION');
$bingverify = getenv('MSVALIDATE01');
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="The gateway and UI for SearXNG from TheDoggyBrad Software Labs. It aims to deliver a randomized SearXNG searching experience with the focus on making your search data not only sent to a single instance.">
    <meta name="robots" content="index, follow">
    <link href="URL" rel="<?php echo htmlspecialchars($baseUrl); ?>">
    <meta name="keywords" content="SearXNG, Privacy, Google, UI, Gateway, Bing, DuckDuckGo, Search, Web, SearX, Randomize, Instances, TheDoggyBrad">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheSearXNG - Gateway and UI</title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo getenv('appletouchicon'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo getenv('favicon32'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo getenv('favicon16'); ?>">
    <link rel="icon" type="image/x-ico" href="<?php echo getenv('favicon'); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($baseUrl); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="TheSearXNG - Gateway and UI">
    <meta property="og:description" content="The gateway and UI for SearXNG from TheDoggyBrad Software Labs. It aims to deliver a randomized SearXNG searching experience with the focus on making your search data not only sent to a single instance.">
    <meta property="og:image" content="<?php echo getenv('screenshot'); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="<?php echo htmlspecialchars($baseUrl); ?>">
    <meta property="twitter:url" content="<?php echo htmlspecialchars($baseUrl); ?>">
    <meta name="twitter:title" content="TheSearXNG - Gateway and UI">
    <meta name="twitter:description" content="The gateway and UI for SearXNG from TheDoggyBrad Software Labs. It aims to deliver a randomized SearXNG searching experience with the focus on making your search data not only sent to a single instance.">
    <meta name="twitter:image" content="<?php echo getenv('screenshot'); ?>">
    <meta name="google-site-verification" content="<?php echo htmlspecialchars($googleverify); ?>" />
    <meta name="msvalidate.01" content="<?php echo htmlspecialchars($bingverify); ?>" />
    <meta name="yandex-verification" content="1a506144f507113b" />
    <style>
  html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
    }

  .content {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #111111;
    font-family: Arial, sans-serif;
    }

 .container {
    text-align: center;
    width: 100%;
    max-width: 600px;
    padding: 20px;
    }

 img {
    width: 100%;
    height: auto;
    max-width: 443px;
    margin-bottom: 10px;
    }

 input[type="text"] {
    width: calc(100% - 22px);
    max-width: 600px;
    padding: 10px;
    font-size: 16px;
    border: 2px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    }

 button {
    padding: 10px 18px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    background-color: #4f7bfa;
    color: white;
    cursor: pointer;
    margin-top: 20px;
    }

 button:hover {
    background-color: #263b79;
    }

 footer {
    text-align: center;
    color: #FFFFFF;
    padding: 20px;
    background-color: #000000;
    }

 a {
    color: #ffffff;
   }
    </style>
</head>
<body>
    <div class="content">
        <div class="container">
            <img src="<?php echo getenv('iconlogo'); ?>" alt="searxng icon"><br>
            <input type="text" id="searchInput" placeholder="Search the web">
            <button style="margin-top: 20px;" onclick="search()">Search</button>
        </div>
    </div>
    <footer><a href="https://github.com/thedoggybrad/thesearxng/blob/main/README.md">Github (Documentation)</a>
        <br><br>
        ©2024-Present <a href="https://github.com/thedoggybrad">TheDoggyBrad Software Labs</a>. Licensed under the <a href="https://github.com/thedoggybrad/thesearxng/blob/main/LICENSE">MIT-0 License</a>.</footer>
    <script>
        const searchEngines = [
            "https://searx.tiekoetter.com/",
            "https://search.rhscz.eu/",
            "https://searx.rhscz.eu/",
            "https://search.hbubli.cc/",
            "https://search.inetol.net/",
            "https://searx.stream/",
            "https://searx.oloke.xyz/",
            "https://search.im-in.space/",
            "https://searx.tuxcloud.net/",
            "https://etsi.me/"
        ];

        function search() {
            const query = document.getElementById('searchInput').value;
            if (query) {
                const randomIndex = Math.floor(Math.random() * searchEngines.length);
                const searchUrl = `${searchEngines[randomIndex]}search?q=${encodeURIComponent(query)}`;
                window.location.href = searchUrl;
            }
        }

        document.getElementById('searchInput').addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                search();
                event.preventDefault(); // Prevent the default form submit action (if any)
            }
        });
    </script>
</body>
</html>
