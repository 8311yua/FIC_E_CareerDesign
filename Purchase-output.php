<?php session_start(); ?>

<?php
error_reporting(0);
require 'server.php'; 

$purchase_id=1;
foreach ($pdo->query('select max(purchase_id) from purchase') as $row) {
	$purchase_id=$row['max(purchase_id)']+1;
}
$sql=$pdo->prepare('insert into purchase values(?,?)');
if ($sql->execute([$purchase_id, $_SESSION['customer']['id']])) {
	foreach ($_SESSION['Food'] as $product_id=>$product) {
		$sql=$pdo->prepare('insert into purchase_detail values(?,?,?)');
		$sql->execute([$purchase_id, $product_id, $product['count']]);
	}
	unset($_SESSION['Food']);
	echo '購入手続きが完了しました。ありがとうございます。';
	echo '<a class="material-icons btn btn--orange" href="Cart-show.php">予約一覧へ戻る</a>';
} else {
	echo '購入手続き中にエラーが発生しました。申し訳ございません。</br>';
	echo '<a class="material-icons btn btn--orange" href="Cart-show.php">予約一覧へ戻る</a>';
}
?>