<?php session_start(); ?>
<form action="../index.html">
<!DOCTYPE htmel>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home1.css">
</head>
<body>
<?php
if (!isset($_SESSION['customer'])) {
	echo '予約するにはログインしてください。';
} else {
    require '../server.php';
    $id=$_SESSION['customer']['id'];
    $seat_type=$_POST["seat_type"];
    $num_people=$_POST["num_people"];
    $visit_day=$_POST["visit_day"];
    $stmt = $pdo->prepare("insert into seat_reservation(seat_number, num_people, customer_id, date) value(?, ?, ?, ?)");
    $stmt->execute([$seat_type, $num_people, $id, $visit_day]);
    echo '投稿を完了しました';
    print '<input type="submit" value="TOPへ">';
    echo $seat_type;
    echo $num_people;
    echo $id;
    echo $visit_day;
    
}
?>
</body>
</html>