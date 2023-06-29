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
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">新規登録</label>
        <div class="login-form">
        <div class="sign-in-htm">
            <div class="group">
                <form action="login_output.php" method="post">
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
            </div>
        </div>
        <!-- 新規登録画面 -->
        <div class="sign-up-htm">
            <div class="group">
                <form action="checked.php" method="post">
                <label for="user" class="label">ユーザー名</label>
                <input id="user" type="text" name="name" class="input">
            </div>
            <div class="group">
                <label for="pass" class="label">パスワード</label>
                <input id="pass" type="password" name="pass" class="input" data-type="password">
            </div>
            <p>半角英数字をそれぞれ1文字以上含んだ8文字以上で設定してください<p>
            <div class="group">
                <label for="pass" class="label">パスワードを再入力</label>
                <input id="pass" type="password" name="pass2" class="input" data-type="password">
            </div>
            <div class="group">
                <label for="pass" class="label">メールアドレス</label>
                <input id="pass" type="email"  name="email" class="input">
            </div>
            <div class="group">
                <input type="submit" class="button" value="新規登録">
                </form>
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
                <label for="tab-1">Already Member?</a>
            </div>
            </div>
        </div>
    </div>
    </div>