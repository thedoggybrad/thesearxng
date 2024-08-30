<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="https://res.cloudinary.com/dceum4nes/image/upload/v1719906272/mastoget/apple-touch-icon.png.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://res.cloudinary.com/dceum4nes/image/upload/v1719906297/mastoget/favicon-32x32.png.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://res.cloudinary.com/dceum4nes/image/upload/v1719906288/mastoget/favicon-16x16.png.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://res.cloudinary.com/dceum4nes/image/upload/v1719906281/mastoget/favicon.ico.ico">
    <link rel="icon" type="image/x-icon" href="https://res.cloudinary.com/dceum4nes/image/upload/v1719906281/mastoget/favicon.ico.ico">
    <link rel="manifest" href="https://res.cloudinary.com/dceum4nes/raw/upload/v1719906315/mastoget/site.webmanifest">
    <meta name="description" content="Your Feed Retriever for the Mastodon network">
    <meta name="keywords" content="Mastodon, Mastoget">
    <meta name="author" content="The Mastoget Organization">
    <meta property="og:title" content="Mastoget" />
    <meta property="og:type" content="site" />
    <meta property="og:url" content="https://mastoget.x10.bz/" />
    <meta property="og:image" content="https://res.cloudinary.com/dceum4nes/image/upload/v1720272232/mastoget/Mastogetlogo.jpg.jpg" />
    <link rel="canonical" href="https://mastoget.x10.bz/" />
    <title>Mastoget - Your Feed Retriever for the Mastodon network</title>
    <link rel="preload" as="image" href="https://res.cloudinary.com/dceum4nes/image/upload/v1720272232/mastoget/Mastogetlogo.jpg.jpg">
    <!-- Diagnostic Code: Masget10Vercel -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            margin: 20px;
        }

        .post {
            background-color: #333;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 80%;
            margin-left: auto;
            margin-right: auto;
            color: #fff;
        }

        .post p {
            overflow: hidden;
            white-space: pre-line;
            text-overflow: ellipsis;
        }

        .post a:link,
        .popup a:link {
            color: #fff
        }

        .post a:hover {
            color: #FF0000
        }

        .media {
            max-width: 100%;
            margin-top: 10px;
            overflow: hidden;
        }

        .media img,
        .media video {
            width: 100%;
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            display: block;
            margin-bottom: 10px;
        }

        .author-img {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            margin-right: 10px;
        }

        hr {
            border: 0;
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #fff
        }

        @media only screen and (max-width: 600px) {
            .post {
                max-width: 95%;
                margin: 10px;
            }

            .author-img {
                width: 40px;
                height: 40px;
                margin-right: 5px;
            }
        }

        .mastogetlogo {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        #popupBox {
            display: none;
            background-color: #333;
            color: #fff;
            padding: 50px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999;
            overflow: auto; /* Set overflow property to auto or scroll */
        }

        .popup a:link {
            color: #fff
        }

        .popup a:hover {
            color: #FF0000
        }
    </style>
</head>

<body>
    <img class="mastogetlogo" width="300px" height="120px" src="https://res.cloudinary.com/dceum4nes/image/upload/v1720272232/mastoget/Mastogetlogo.jpg.jpg">
    <p class="popup" style="color:white; text-align:center"><a href="https://mastoget.x10.bz">Refresh Content</a><br><a href="https://github.com/The-Mastoget-Organization/about/blob/main/README.md">About Mastoget</a></p><br><br>
</body>

    <?php
    error_reporting(0);

    // Function to fetch posts from a Mastodon instance public timeline using ActivityPub
    function fetchPostsFromMastodon($url)
    {
        // Make a GET request to fetch posts
        $response = file_get_contents($url);

        // Decode JSON response
        $data = json_decode($response, true);

        // Extract and return posts
        return isset($data) ? $data : [];
    }

    // Function to decode HTML entities, including emoji codes
    function decodeEntities($text)
    {
        return html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }

    // Function to get the profile image URL of the author
    function getAuthorProfileImage($account)
    {
        return $account['avatar'];
    }

    // Function to calculate the time difference and format it
    function getTimeElapsedString($datetime, $full = false)
    {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );

        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . ($diff->$k > 1 ? $v . 's' : $v);
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }

    // Array of specific XML files you want to load
    $files = [
        'https://selectedinstances.mastoget.x10.bz/instances1.xml',
        'https://selectedinstances.mastoget.x10.bz/instances2.xml',
        'https://selectedinstances.mastoget.x10.bz/instances3.xml',
        'https://selectedinstances.mastoget.x10.bz/instances4.xml',
        'https://selectedinstances.mastoget.x10.bz/instances5.xml',
        'https://selectedinstances.mastoget.x10.bz/instances6.xml',
        'https://selectedinstances.mastoget.x10.bz/instances7.xml',
        'https://selectedinstances.mastoget.x10.bz/instances8.xml',
        'https://selectedinstances.mastoget.x10.bz/instances9.xml',
        'https://selectedinstances.mastoget.x10.bz/instances10.xml',
        // Add more filenames here as needed
    ];

    $urls = [];

    // Loop through each XML file
    foreach ($files as $file) {
        // Load instance URLs from the XML file
        $instancesXml = simplexml_load_file($file);

        foreach ($instancesXml->instance as $instance) {
            $urls[] = (string) $instance;
        }
    }

    // Randomly select one URL from the $urls array
    $randomUrl = $urls[array_rand($urls)];

    // Fetch posts from the randomly selected Mastodon instance URL
    $posts = fetchPostsFromMastodon($randomUrl);

    // Display posts
    foreach ($posts as $post) {
        echo "<div class='post'>";

        // Display author's profile image
        $authorProfileImage = getAuthorProfileImage($post['account']);
        echo "<img class='author-img' src='{$authorProfileImage}' alt='Author Profile Image'>";

        // Display decoded and converted author and content
        echo "<p style='margin-bottom: 2px;'><strong>{$post['account']['display_name']}</strong><p class='post-time' style='margin-top: 0px;'>Posted&nbsp;" . getTimeElapsedString($post['created_at']) . "</p>";
        echo "<p>" . decodeEntities($post['content']) . "</p>";

        // Display media attachments (images or videos)
        if (isset($post['media_attachments']) && !empty($post['media_attachments'])) {
            foreach ($post['media_attachments'] as $attachment) {
                if ($attachment['type'] === 'image') {
                    echo "<div class='media'><img src='" . $attachment['url'] . "' alt='Image'></div>";
                } elseif ($attachment['type'] === 'video') {
                    echo "<div class='media'><video controls><source src='" . $attachment['url'] . "' type='video/mp4'></video></div>";
                }
            }
        }

        echo "</div><hr>";
    }
    ?>
</body>
</html>
