<?php require '../server.php' ?>
<?php

// 画像ファイルのアップロード
if(is_uploaded_file($_FILES["image"]["tmp_name"])){
	// if (!file_exists('image')) {
	// 	mkfile('image');
	// }
	$image='../assets/images/drink/'.basename($_FILES["image"]["name"]);
	if (move_uploaded_file($_FILES["image"]["tmp_name"], $image)) {
		echo $_FILES["image"]["name"], 'のアップロードに成功しました。';
        
	} else {
		echo 'アップロードに失敗しました。';
	}
} else {
	echo 'ファイルを選択してください。';
}

$sql = $pdo->prepare('insert into Drink values(null,?,?,?,?,?)');
$img_name = $_FILES["image"]["name"];
if($sql->execute([$_REQUEST['name'],$img_name,$_REQUEST['prices'],$_REQUEST['pricem'],$_REQUEST['pricel']])){
    echo 'mesi商品の追加に成功しました。';
}else{
    echo 'mesi商品の追加に失敗しました。';
}
?>