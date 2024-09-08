<?php

require_once '../functions.php';

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザ登録画面</title>
</head>

<body>
    <h2>ユーザ登録フォーム</h2>
    <form action="./register.php" method="post">
        <p>
            <label for="username">ユーザ名： </label>
            <input type="text" id="username" name="username">
        </p>
        <p>
            <label for="email">メールアドレス： </label>
            <input type="email" id="email" name="email">
        </p>
        <p>
            <label for="password">パスワード： </label>
            <input type="password" id="password" name="password">
        </p>
        <p>
            <label for="password_conf">パスワード確認： </label>
            <input type="password" id="password_conf" name="password_conf">
        </p>
        <input type="hidden" name="csrf_token" value="<?php echo h(setToken()); ?>">
        <p><input type="submit" value='新規登録'></p>
    </form>
</body>

</html>