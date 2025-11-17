<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <title>Contact Form</title>
</head>
<body>

<header class="header">
    <div class="header-title">FashionablyLate</div>
    <a href="/register" class="register-btn">register</a>
</header>

<h1 class="login-title">Login</h1>

<div class="login-container">
    <form action="" method="POST">
        <label class="label">メールアドレス</label>
        <input type="email" name="email" placeholder="例：test@example.com" class="input">

        <label class="label">パスワード</label>
        <input type="password" name="password" placeholder="例：coachtechno6" class="input">

        <button type="submit" class="login-btn">ログイン</button>
    </form>
</div>

</body>
</html>
