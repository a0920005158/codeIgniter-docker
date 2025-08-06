<h2>登入</h2>
<?php if (session()->getFlashdata('error')): ?>
    <p><?= session()->getFlashdata('error') ?></p>
<?php endif; ?>
<form action="/login" method="post">
    <?= csrf_field() ?>
    <input type="email" name="email" placeholder="電子郵件" required><br>
    <input type="password" name="password" placeholder="密碼" required><br>
    <button type="submit">登入</button>
</form>