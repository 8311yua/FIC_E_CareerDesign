<!-- 夏季課題のほう -->
<!-- store.phpを変更する必要あり -->
<form action="store.php" metod="post">
<?php session_start();?>
<?php
unset($_SESSION['customer']);
$pdo=new PDO('mysql:host=localhost;dbname=reserve_bakery;charset=utf8',
    'discipline', 'tr_2146');
$sql=$pdo->prepare('select * from customer where customer_name=? and password=?');
$sql->execute([$_REQUEST['name'], $_REQUEST['password']]);
foreach ($sql as $row) {
    $_SESSION['customer']=[
        'id'=>$row['customer_id'], 'name'=>$row['customer_name'],
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