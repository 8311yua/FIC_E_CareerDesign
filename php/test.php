
<?php
$pdo=new PDO('mysql:host=localhost;dbname=pan;charset=utf8', 'staff', 'password');
foreach($pdo -> query('select*from food')as $row){
	echo'<p>';
	echo $row['id'],':';
	echo $row['name'],':';
	echo $row['price'],':';
	echo'<p>';
}
?>
