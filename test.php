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
                <p class="text"></p>
                <h4 id="food">food</h4>
                    <div class="row">
                        <?php
                        foreach($pdo->query('select * from food') as $row){
                            echo '<div class="col-lg-4 col-md-6 col-sm-6">';
                            echo '<div class="product__item"><tr>';
                            echo '<p><a href="test.php"><img src="','assets/images/',$row['image'],'"class="product__item__pic"></a></p>';
                            echo '<div class="product__item__text">';
                            echo '<h5><a href="test.php">', $row['name'], '</a></h5>';
                            echo '<h5>','¥', $row['price'], '</h5>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                <h4 id="drink">drink</h4>
                    <div class="row">
                        <?php
                        foreach($pdo->query('select * from drink') as $row){
                            echo '<div class="col-lg-4 col-md-6 col-sm-6">';
                            echo '<div class="product__item"><tr>';
                            echo '<p><a href="test.php"><img src="','assets/images/',$row['image'],'"class="product__item__pic"></a></p>';
                            echo '<div class="product__item__text">';
                            echo '<h5><a href="test.php">', $row['name'], '</a></h5>';
                            echo '<h5>','¥', $row['prices'],'~¥',$row['pricel'],'</h5>';
                            // echo '<p><a href="index.php"><img src="','image/',$row['image1'],'"class="product__item__pic"></a></p>';
                            echo '<div class="product__item__text">';
                            echo '<h5><a href="test.php">', $row['name'], '</a></h5>';
                            echo '<h5>', $row['price'], '</h5>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
            </div>
        </div>
    </div>
</section>
