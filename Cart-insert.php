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
        <link href="css/mystyle.css" rel="stylesheet" type="text/css" >
    </head>
    <body>
        <?php
        $id=$_REQUEST['id'];
        if(!isset($_SESSION['Food'])){
            $_SESSION['Food']=[];
        }
        $count=0;
        if(isset($_SESSION['Food']['id'])){
            $count=$_SESSION['Food']['id']['count'];
        }
        $_SESSION['Food']['id']=[
            'name'=>$_REQUEST['name'];
            'price'=>$_REQUEST['price'];
            'count'=>$_REQUEST['count'];
        ];
        echo'<p>カートに商品を追加しました。</p>';
        echo'<hr>';
        require 'Cart.php';
        ?>
    </body>
</html>