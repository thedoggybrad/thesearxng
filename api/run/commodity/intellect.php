<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheSearXNG - Gateway and UI</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="icon" type="image/x-ico" href="/favicon/favicon.ico">
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
            width: 80%;
            max-width: 800px;
        }
        img {
            width: 100%;
            height: auto;
            max-width: 443px; /* Maintain the original maximum width */
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: 100%;
            max-width: 600px;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ddd;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #da5739;
            color: white;
            cursor: pointer;
            margin-left: 10px;
        }
        button:hover {
            background-color: #cc5b34;
        }
        footer {
            text-align: center;
            color: #FFFFFF;
            padding: 10px;
            background-color: #000000;
        }
        a {color: #ffffff;}
    </style>
</head>
<body>
    <div class="content">
        <div class="container">
            <img src="/favicon/searxng.png" alt="searxng icon">
            <input type="text" id="searchInput" placeholder="Search using SearXNG">
            <button style="margin-top: 20px;" onclick="search()">Search</button>
        </div>
    </div>
    <footer>©DDG-UI from <a href="https://github.com/thedoggybrad">TheDoggyBrad</a>. All Rights Reserved.</footer>
    <script>
        const searchEngines = [
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
