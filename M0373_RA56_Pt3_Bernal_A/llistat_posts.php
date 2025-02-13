<?php
$url = "http://localhost/wordpress/?rest_route=/wp/v2/";
$element = "posts";
$client = curl_init();
curl_setopt($client, CURLOPT_URL, $url . $element);
curl_setopt($client, CURLOPT_HEADER, 0);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$json = curl_exec($client);
curl_close($client);

$obj = json_decode($json);
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llistat de Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .post {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
        }
        .post h2 {
            margin: 0;
        }
        .post p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Llistat de Posts</h1>
    <?php foreach ($obj as $post): ?>
        <div class="post">
            <h2><?php echo htmlspecialchars($post->title->rendered); ?></h2>
            <p><strong>ID:</strong> <?php echo $post->id; ?></p>
            <p><strong>Data:</strong> <?php echo $post->date; ?></p>
            <p><?php echo substr(strip_tags($post->content->rendered), 0, 200) . '...'; ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>