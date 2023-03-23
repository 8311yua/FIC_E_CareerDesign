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
<!-- 新規登録画面 -->
<div class="sign-up-htm">
<div class="group">
    <!-- 入力内容をcheck.phpへ -->
    <form action="check.php" method="post">
    <!-- ユーザー名を入力 -->
    <label for="user" class="label">ユーザー名</label>
    <input id="user" type="text" name="name" class="input">
</div>
<div class="group">
    <!-- パスワードを入力 -->
    <label for="pass" class="label">パスワード</label>
    <input id="pass" type="password" name="pass" class="input" data-type="password">
</div>
<p>半角英数字をそれぞれ1文字以上含んだ8文字以上で設定してください<p>
<div class="group">
    <!-- パスワードの確認 -->
    <label for="pass" class="label">パスワードを再入力</label>
    <input id="pass" type="password" name="pass2" class="input" data-type="password">
</div>
<div class="group">
    <!-- メールアドレスを入力 -->
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