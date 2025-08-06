<h2>註冊</h2>
<form action="/register" method="post">
    <?= csrf_field() ?>
    <input type="text" name="username" placeholder="使用者名稱" required><br>
    <input type="email" name="email" placeholder="電子郵件" required><br>
    <input type="password" name="password" placeholder="密碼" required><br>
    <button type="submit">註冊</button>
</form>