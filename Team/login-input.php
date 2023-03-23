<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <!-- ログイン画面 -->
    <div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">ログイン</label>
        <!-- ログイン画面 -->
        <div class="login-form">
        <div class="sign-in-htm">
            <div class="group">
                <!-- 入力内容をlogin-output.phpへ -->
                <form action="login-output.php" method="post">
            <label for="user" class="label">ユーザー名</label>
            <input name="name" id="user" type="text" class="input">
            </div>
            <div class="group">
            <label for="pass" class="label">パスワード</label>
            <input name="password" id="pass" type="password" class="input" data-type="password">
            </div>
            <div class="group">
            <input type="submit" class="button" value="ログイン">
                </form>
                <a href="sign_up_input.php">新規登録</a>
            </div>
        </div>
    </div>
    </div>