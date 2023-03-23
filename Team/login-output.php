<form action="store.php" metod="post">
<?php session_start();?>
<?php
$dsn = 'mysql:dbname=reserve_bakery;host=localhost;charset=utf8';
$user = 'discipline';
$password = 'tr_2146';
unset($_SESSION['customer']);
try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    echo "接続失敗:".$error->getMessage();
    die();
}

$sql=$pdo->prepare('select * from customer where customer_name=? and password=?');
$sql->execute([$_REQUEST['name'], $_REQUEST['password']]);
foreach ($sql as $row) {
    $_SESSION['customer']=[
        'id'=>$row['id'], 'name'=>$row['name'],
        'password'=>$row['password'], 'address'=>$row['address']];
}
if (isset($_SESSION['customer'])) {
    echo 'いらっしゃいませ、', $_SESSION['customer']['name'], 'さん。', '<br>';
    print '<input type="submit" value="TOPへ">';
} else {
    echo 'ログイン名またはパスワードが違います。';
}

?>        