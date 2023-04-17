<form action="store.php" method="post">
<?php session_start();?>
<?php
// 'mysql:dbname="データベース名を入力";host=localhost;charset=utf8';
$dsn = 'mysql:dbname=reserve_bakery;host=localhost;charset=utf8';

// 'ユーザー名を入力';
$user = 'discipline';

// 'パスワードを入力';
$password = 'tr_2146';

unset($_SESSION['customer']);
$pdo=new PDO($dsn, $user, $password);

// 'select * from 'テーブル名を入力' where 'ユーザー名を入れてる列名を入力'=? and 'パスワードを入れてる列名'=?'
$sql=$pdo->prepare('select * from customer where customer_name=? and password=?');
$sql->execute([$_REQUEST['name'], $_REQUEST['password']]);
foreach ($sql as $row) {
    $_SESSION['customer']=[
        // $row['ユーザーIDを入れている列名'] $row['ユーザー名を入れてる列名']
        'id'=>$row['customer_id'], 'name'=>$row['customer_name'],
        // $row['パスワードを入れている列名'] $row['アドレスを入れている列名']
        'password'=>$row['password'], 'address'=>$row['address']];
}
if (isset($_SESSION['customer'])) {
    echo 'いらっしゃいませ、', $_SESSION['customer']['name'], 'さん。', '<br>';
    print '<input type="submit" value="TOPへ">';
} else {
    echo 'ログイン名またはパスワードが違います。';
    print '<input type="button" onclick="history.back()" value="戻る" class="button">';
}

?>        