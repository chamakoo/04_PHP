<?php
$user = '';
$pass  = '';
$error = '';

if (!empty($_POST)) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $error = $_POST['error'];
}
session_start();

if ($_POST["user"] === 'taro'
    $_POST['pass'] === 'abcd') {
    $_SESSION['authenticated'] = true;
    header('Location: member.php');
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ログイン</title>
    </head>
    <style>
        .error {
            color: #f00;
        }
    </style>
    <body>
        <h1>ログイン</h1>
        <?php if (empty($error)): ?>
        <p class="error"><?= 'ユーザーIDカパスワード正しくありません'?></p>
        <?php endif; ?>
            <p>ユーザーIDとパスワードを入力して「ログイン」ボタンを押してください</p>
        <form action="" method="post" novalidate>
            <p>ユーザーID<input type="text" name="user"></p>
            <p>パスワード<input type="text" name="pass"></p>
        </form>
        <p><input type="submit" value="ログイン"></p>
    </body>
</html>
