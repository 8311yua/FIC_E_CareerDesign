<!DOCTYPE htmel>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Check</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login2.css">
</head>
<body>
    <div class="login-wrap">
    <div class="login-html">
    <?php require '../server.php' ?>
    
    <?php
    $staff_name=$_POST['name']; //前の画面から入力値を受け取り、$staff_nameに格納
    $staff_pass=$_POST['pass']; //前の画面から入力値を受け取り、$staff_passに格納
    $staff_pass2=$_POST['pass2']; //前の画面から入力値を受け取り、$staff_pass2に格納
    $staff_email=$_POST['email'];

    $staff_name=htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8'); //文字列に変換（セキュリティ対策）
    $staff_pass=htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8'); //文字列に変換（セキュリティ対策）
    $staff_pass2=htmlspecialchars($staff_pass2,ENT_QUOTES,'UTF-8'); //文字列に変換（セキュリティ対策）

    //$staff_nameがカラならエラーメッセージを表示する
    //$staff_nameが入力されていれば、$staff_nameを表示する
    if ($staff_name=='') {
        print 'ユーザー名が入力されていません。<br />';
    } else {
        print 'ユーザー名：';
        print $staff_name;
        print '<br />';
    }

    if ($staff_email=='') {
        print 'メールアドレスが入力されていません。<br />';
    } else {
        print 'メールアドレス：';
        print $staff_email;
        print '<br />';
    }
    // パスワードの正規表現
    if (preg_match('/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{8,100}+\z/i', $staff_pass)) {
        $password = password_hash($staff_pass, PASSWORD_DEFAULT);
      } else {
        echo 'パスワードは半角英数字をそれぞれ1文字以上含んだ8文字以上で設定してください。';
        return false;
      }
    //$staff_passがカラならエラーメッセージを表示する
    if ($staff_pass=='') {
        print 'パスワードが入力されていません。<br />';
    }

    //$staff_pass、$staff_pass2が一致しなければ、エラーメッセージを表示する
    if ($staff_pass!=$staff_pass2) { //もしパスワード1とパスワード2の値が異なるなら
        print 'パスワードが一致しません。<br />';
    }
    //データベース内のメールアドレスを取得
    $stmt = $pdo->prepare("select address from customer where address = ?");
    $stmt->execute([$staff_email]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //データベース内のメールアドレスと重複していない場合、登録する。
    if (!isset($row['address']) && $staff_email!='') {
        $stmt = $pdo->prepare("insert into customer(customer_name, password, address) value(?, ?, ?)");
        $stmt->execute([$staff_name, $staff_pass, $staff_email]);

    //$staff_name、$staff_pass、$staff_pass2がカラなら、または、$staff_pass、$staff_pass2が一致しなければ、戻るボタンのみを表示する
    //入力項目が適切なら、戻るボタンとOKボタンを表示する。
    if ($staff_name=='' || $staff_email=='' || $staff_pass=='' || $staff_pass2=='' || $staff_pass!=$staff_pass2) {
        print '<form>';
        print '<input type="button" onclick="history.back()" value="戻る" class="button">';
        print '<form>';
    } else {
        print '登録が完了しました';
        print  $staff_name;
        print 'さん';
        print '<br>';
        print '<form action="login_input.php" method="post">';
        print '<input type="submit" value="ログイン画面へ戻る" class="button">';
        print '</form>';
    }} else {
        //print '<input type="button" onclick="history.back()" value="戻る" class="button">';
        if($staff_email!='') {
        print '既に登録されたメールアドレスです。';
        print '<br>';
        print '<input type="button" onclick="history.back()" value="戻る" class="button">';
    }}
    ?>
    </div>
</div>
</body>
</html>