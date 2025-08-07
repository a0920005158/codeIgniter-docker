<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <link rel="stylesheet" href="<?= base_url('css/main.css') ?>">

    <?= $this->renderSection('styles') ?>
</head>

<body>
    <header>
    </header>

    <main>
        <div class="container">
            <?= $this->renderSection('content') ?>
        </div>
    </main>

    <footer>
    </footer>

    <script src="<?= base_url('js/app.js') ?>"></script>
</body>

</html>