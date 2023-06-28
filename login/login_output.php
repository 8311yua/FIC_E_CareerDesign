<!-- 夏季課題のほう -->
<!-- store.phpを変更する必要あり -->
<!-- 夏季課題のほう -->
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
<form action="../index.html" metod="post">
<?php require '../server.php' ?>
<?php session_start();?>

<?php
unset($_SESSION['customer']);
<<<<<<< HEAD
=======
// $pdo=new PDO('mysql:host=localhost;dbname=reserve_bakery;charset=utf8',
//     'discipline', 'tr_2146');
require '../server.php';
>>>>>>> 79347a88a1cb050e537b99f61cc5b2ac22e66382

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