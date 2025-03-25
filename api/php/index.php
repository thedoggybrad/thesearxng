<?php
// INSTRUCTIONS:
// FOR THE URL OF YOUR SITE, NAME THE ENVIRONMENT VARIABLE as CANONICAL_URL and put your own values there
// FOR THE GOOGLE VERIFICATION KEY, NAME THE ENVIRONMENT VARIABLE as GOOGLE_SITE_VERIFICATION and put your own values there
// FOR THE BING VERIFICATION KEY, NAME THE ENVIRONMENT VARIABLE as MSVALIDATE01 and put your own values there
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
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="icon" type="image/x-ico" href="/favicon/favicon.ico">
    <meta property="og:url" content="<?php echo htmlspecialchars($baseUrl); ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="TheSearXNG - Gateway and UI">
    <meta property="og:description" content="The gateway and UI for SearXNG from TheDoggyBrad Software Labs. It aims to deliver a randomized SearXNG searching experience with the focus on making your search data not only sent to a single instance.">
    <meta property="og:image" content="/favicon/image.PNG">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="<?php echo htmlspecialchars($baseUrl); ?>">
    <meta property="twitter:url" content="<?php echo htmlspecialchars($baseUrl); ?>">
    <meta name="twitter:title" content="TheSearXNG - Gateway and UI">
    <meta name="twitter:description" content="The gateway and UI for SearXNG from TheDoggyBrad Software Labs. It aims to deliver a randomized SearXNG searching experience with the focus on making your search data not only sent to a single instance.">
    <meta name="twitter:image" content="/favicon/image.PNG">
    <meta name="google-site-verification" content="<?php echo htmlspecialchars($googleverify); ?>" />
    <meta name="msvalidate.01" content="<?php echo htmlspecialchars($bingverify); ?>" />
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
            <img src="/favicon/searxng.png" alt="searxng icon"><br>
            <input type="text" id="searchInput" placeholder="Search the web">
            <button style="margin-top: 20px;" onclick="search()">Search</button>
        </div>
    </div>
    <footer><a href="https://github.com/thedoggybrad/thesearxng/blob/main/README.md">Github (Documentation)</a>
        <br><br>
        ©2024-Present <a href="https://github.com/thedoggybrad">TheDoggyBrad Software Labs</a>. Licensed under the <a href="https://github.com/thedoggybrad/thesearxng/blob/main/LICENSE">MIT-0 License</a>.</footer>
    <script>
        const searchEngines = [
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
            "https://searxng.f24o.zip/",
            "https://search.citw.lgbt/"
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
