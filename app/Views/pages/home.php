<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>home!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->

    <style {csp-style-nonce}>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

    <h1><?= esc($title) ?></h1>
    homexxx


    <?php if (! empty($news) && is_array($news)): ?>

        <?php foreach ($news as $news_item): ?>

            <h3><?= esc($news_item['title']) ?></h3>

            <div class="main">
                <?= esc($news_item['body']) ?>
            </div>
            <p><a href="/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

        <?php endforeach; ?>

    <?php else: ?>

        <h3>No News</h3>

        <p>Unable to find any news for you.</p>

    <?php endif ?>
</body>

</html>