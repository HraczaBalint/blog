<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <h1>
                <a href='/posts/<?php echo $post->slug ?>'><?php echo $post->title ?></a>
            </h1>

            <div>
                <?php echo $post->excerpt; ?>
            </div>
        </article>
    <?php endforeach; ?>
</body>
</html>
