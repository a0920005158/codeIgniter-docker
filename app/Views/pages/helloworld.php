<?= $this->extend('layout') ?>

<?= $this->section('title') ?>
<?= esc($title) ?>
<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('css/pages/helloworld.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>歡迎來到<?= esc($title) ?>！</h1>
<p>這是網站的內容區塊。</p>
<?= $this->endSection() ?>