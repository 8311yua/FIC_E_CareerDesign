<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shitamichi's Bakery</title>
        <link rel="icon" type="image/x-icon" href="assets/images/logo2.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/test.css">
        <link rel="stylesheet" href="css/test2.css">
        <link href="tes.css" rel="stylesheet" />
    </head>
<body>
<?php
$pdo =new PDO('mysql:host=localhost;dbname=pan;charset=utf8', 'staff', 'password');
?>
<!-- Product Section Begin -->
<header>
</header>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Shitamichi's Bakery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="test.php#food">food</a></li>
                <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="test.php#drink">drink</a></li>
            </ul>
        </div>
    </div>
</nav>
<h1>～～商品～～</h1>
<section class="product spad">
    <div class="container">
        <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
                <!-- food -->
                <h4 id="food">food</h4>
                <div class="row">                    
                    <?php
                    foreach($pdo->query('select * from Food') as $row){
                        $id = $row['id'];
                        echo '<div class="col-lg-4 col-md-6 col-sm-6">';
                        echo '<div class="product__item"><tr>';
                        // ここで、ホップアップウィンドウで開かせる(画像) 
                        echo '<label for="pu-on"><img src="','assets/images/',$row['image'],'"class="product__item__pic"></label>';
                        echo '<div class="product__item__text">';
                        // ここに上のコードを加える
                        // echo '<h5><label for="pu-on"></label></h5>';
                        echo '<h5><a href="test.php?id=',$id,'">',$row['name'],'</a></h5>';
                        echo '<h5>','¥', $row['price'], '</h5>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <!-- drink -->
                <!-- まだ手を加えてない -->
                <h4 id="drink">drink</h4>
                <div class="row">
                    <?php
                    foreach($pdo->query('select * from drink') as $row){
                        echo '<div class="col-lg-4 col-md-6 col-sm-6">';
                        echo '<div class="product__item"><tr>';
                        // ここで、ホップアップウィンドウで開かせる(画像) 
                        echo '<label for="pu-on"><img src="','assets/images/',$row['image'],'"class="product__item__pic"></label>';
                        echo '<div class="product__item__text">';
                        // ここに上のコードを加える
                        echo '<h5><a href="test.php?id=',$id,'">',$row['name'],'</a></h5>';
                        echo '<h5>','¥', $row['prices'],'~¥',$row['pricel'],'</h5>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                    
                    <!-- echo'<input type="checkbox" id="pu-on">';
                    echo'<div class="pu">';
                    echo'<label for="pu-on" class="icon-close">×</label>';
                    echo'<div class="pu-content">';
                    echo '<a href="gameDetails.php?id=', $id,'"><div class="product__item__pic set-bg" data-setbg="','assets/images/',$row['image'],'">';
                    echo'<label for="pu-on"><img src="','assets/images/',$row['image'],'"class="product__item__pic"></label>';
                    echo'</div>';
                    echo'</div>';
                    echo'</div>';
                    -->

            </div>
            <input type="checkbox" id="pu-on">
                <div class="pu">
                    <label for="pu-on" class="icon-close">×</label>
                    <div class="pu-content">
                        <h1>～～商品～～</h1>
                        <label for="pu-on"><img src="','assets/images/',$row['image'],'"class="product__item__pic"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
