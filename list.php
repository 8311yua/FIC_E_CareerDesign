<!--元ログインしないでも見れるメニュー一覧-->
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
    </head>
    <body>
        <header>

            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">
                    <img style="width: 10%;" src="assets/images/logo4.png" alt="..." />
                </span>
                <span class="site-heading-lower">Shitamichi's Bakery</span>
            </h1>
        </header>
        <!--メニュー-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="list.php">Menu</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.php">Reservation</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.php">Store</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/メニュー-->
        <!-- 内部 -->
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <p>food</p>
								<table>
								<tr><th>商品名</th><th>価格</th></tr>
									<div class="container">
										<?php
											$pdo=new PDO('mysql:host=localhost;dbname=pan;charset=utf8', 'staff', 'password');
											foreach($pdo -> query('select*from food')as $row){
												echo'<tr>';
												echo'<td>',$row['name'],'</td>';
												echo'<td>',$row['price'],'</td>';
												echo'</tr>';
											}
										?>
									</div>
								</table>
                                <p>drink</p>
								<table>
								<tr><th>商品名</th><th>価格</th><th>価格</th><th>価格</th></tr>
									<div class="container">
										<?php
											$pdo=new PDO('mysql:host=localhost;dbname=pan;charset=utf8', 'staff', 'password');
											foreach($pdo -> query('select*from drink')as $row){
												echo'<tr>';
												echo'<td>',$row['name'],'</td>';
												echo'<td>',$row['prices'],'</td>';
												echo'<td>',$row['pricem'],'</td>';
												echo'<td>',$row['pricel'],'</td>';
												echo'</tr>';
											}
										?>
									</div>
								</table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 内部 -->

        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
    </body>
</html>
