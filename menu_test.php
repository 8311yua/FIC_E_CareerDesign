<!-- 現メニュー一覧 -->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- タイトル -->
        <title>Shitamichi's Bakery</title>
        <link rel="icon" type="image/x-icon" href="../assets/images/logo2.png" />
        <!-- icons-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <!-- <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-1-1/css/6-1-1.css"> -->

        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    </head>
    <header>
        <div class="wrapper">
            <h1 class="heading site-heading text-center text-faded d-none d-lg-block">Shitamichi's Bakery</h1>
                <!-- <span class="site-heading-upper text-primary mb-3">
                    <img style="width: 10%;" src="assets/images/logo4.png" alt="..." />
                </span> -->
                <!-- <span class="site-heading-lower">Shitamichi's Bakery</span><br>
                <span class="site-heading-lower" style="font-size: 50%;">思わず笑顔になるおいしいコーヒーを提供しています。<br>クッキーやクロワッサン、タルトやケーキなどのお菓子と一緒にいかがでしょうか。</span>
                -->
                <ul class="slider">
                    <li class="slider-item slider-item01"></li>
                    <li class="slider-item slider-item02"></li>
                    <li class="slider-item slider-item03"></li>
                    <li class="slider-item slider-item04"></li>
                </ul>
            
        </div>
    </header>
        <!-- データベース -->
        <?php require 'server.php' ?>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Shitamichi's Bakery</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="menu_test.php#food">food</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="menu_test.php#drink">drink</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="product spad">
            <div class="container">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <!-- food -->
                        <h2 id="food">Food</h2>
                        <div class="row">                    
                            <?php
                            foreach($pdo->query('select * from food') as $row){
                                $id = $row['id'];
                                echo '<div class="col-lg-4 col-md-6 col-sm-6">';
                                echo '<div class="product__item"><tr>';
                                // echo '<img src="','assets/images/',$row['image'],'"class="product__item__pic">';
                                echo '<div class="product__item__text">';
                                echo '<h5><a href="Food.php?id=',$id,'">',$row['name'],'</a></h5>';
                                echo '<h5>','¥', $row['price'], '</h5>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                        <!-- drink -->
                        <h2 id="drink">Drink</h2>
                        <div class="row">
                            <?php
                            foreach($pdo->query('select * from drink') as $row){
                                $id = $row['id'];
                                echo '<div class="col-lg-4 col-md-6 col-sm-6">';
                                echo '<div class="product__item"><tr>';
                                // echo '<img src="','assets/images/',$row['image'],'"class="product__item__pic">';
                                echo '<div class="product__item__text">';
                                echo '<h5><a href="Drink.php?id=',$id,'">',$row['name'],'</a></h5>';
                                echo '<h5>','¥', $row['prices'],'~¥',$row['pricel'],'</h5>';
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
        <script src="js/myjs.js"></script>
    </body>
</html>