<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- タイトル -->
        <title>Shitamichi's Bakery</title>
        <link rel="icon" type="image/x-icon" href="assets/images/logo2.png" />
        <!-- icons-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- CSS-->
        <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <!-- <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-1-1/css/6-1-1.css"> -->
        <!-- 自作CSS -->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/photograph.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
        <!-- カートアイコンリンク -->
    	<!-- https://fonts.google.com/icons -->
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
            	<a class="navbar-brand text-uppercase fw-bold d-lg-none " href="index.php">Shitamichi's Bakery</a>
            	<button class="navbar-toggler" type="button" data-bs-toggle="collapse"data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            	<div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto ul-nav">
                        <li class="nav-item li-nav px-lg-4"><a class="nav-link text-uppercase" href="index.html"><span>Home</span><br>ホーム</a></li>
                        <li class="nav-item li-nav px-lg-4"><a class="nav-link text-uppercase" href="menu.php"><span>Menu</span><br>商品予約</a></li>
                        <li class="nav-item li-nav px-lg-4"><a class="nav-link text-uppercase" href="seat/seat_reservation.php"><span>Reservation</span><br>座席予約</a></li>
                        <li class="nav-item li-nav px-lg-4"><a class="nav-link text-uppercase" href="login/login_input.php"><span>login</span><br>ログイン</a></li>
                    </ul>
            	</div>
        	</div>
    	</nav>
    </header>
    <body>
        <!-- データベース -->
        <?php require 'server.php' ?>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Shitamichi's Bakery</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="menu.php#food">food</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="menu.php#drink">drink</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- 内部処理、下記データベースの接続 -->
        <?php require 'server.php' ?>
        <section class="product spad">
            <div class="container">
                <div class="col-xl-9 col-lg-10 mx-auto">
        <span><a class="material-icons btn btn--orange" href="Cart-show.php">shopping_cart</a></span>
                <!-- food -->
                    <div class="bg-faded rounded p-5">
                        <h2 id="food">Food</h2>
                        <div class="row">
                            <?php
                                foreach($pdo->query('select * from food') as $row){
                                    // 取得
                                    $id = $row['id'];
                                    echo '<div class="col-lg-4 col-md-6 col-sm-6">';
                                    echo '<div class="product__item"><tr>';
                                    // 画像にリンクの貼り付け
                                    echo '<a href="Food.php?id=', $id,'"><div class="menu__item__pic set-bg"><img src="','assets/images/food/',$row['image'],'"class="menu__item__pic"></div></a>';
                                    echo '<div class="product__item__text">';
                                    // 名前にリンクの貼り付け
                                    echo '<h5><a href="Food.php?id=',$id,'">',$row['name'],'</a></h5>';
                                    // 値段の表示
                                    echo '<h5>','¥', $row['price'], '</h5><br>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                        </div>
                    </div>
                    <br><br>
                <!-- food end -->

                <!-- drink -->
                    <div class="bg-faded rounded p-5">
                        <h2 id="drink">Drink</h2>
                        <div class="row">
                            <?php
                                foreach($pdo->query('select * from drink') as $row){
                                    $id = $row['id'];
                                    echo '<div class="col-lg-4 col-md-6 col-sm-6">';
                                    echo '<div class="product__item"><tr>';
                                    // 画像にリンクの貼り付け
                                    echo '<a href="Drink.php?id=', $id,'"><div class="menu__item__pic set-bg"><img src="','assets/images/drink/',$row['image'],'"class="menu__item__pic"></div></a>';
                                    echo '<div class="product__item__text">';
                                    // 名前にリンクの貼り付け
                                    echo '<h5><a href="Drink.php?id=',$id,'">',$row['name'],'</a></h5>';
                                    // 値段の表示
                                    echo '<h5>','¥', $row['prices'],'~¥',$row['pricel'],'</h5><br>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                ?>
                        </div>
                    </div>
                <!-- drink end -->
                </div>
            </div>
        </section>
        <!-- 内部処理end -->
        
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!--自作のJS-->
        <script src="js/myjs.js"></script>
    </body>
</html>
