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
        <section class="product spad">
            <div class="container">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <div class="row"> 
                            <?php require 'server.php' ?>
                            <?php
                            $sql=$pdo -> prepare('select * from Food where id=?');
                            $sql->execute([$_REQUEST['id']]);
                            // Navigation
                            foreach($sql as $row){
                                echo'<form action="Cart-insert.php method="post">';
                                echo'<p>商品番号:',$row['id'],'</p>';
                                echo'<p>商品名:',$row['name'],'</p>';
                                echo'<p>価格:',$row['price'],'</p>';
                                echo'<p>個数:<select name="count">';
                                for ($i=1; $i<=10; $i++){
                                    echo '<option value="',$i,'">',$i,'</option>';
                                }
                                echo'</select></p>';
                                echo'<input type="hidden" name="id" value="',$row['id'],'">';
                                echo'<input type="hidden" name="name" value="',$row['name'],'">';
                                echo'<input type="hidden" name="price" value="',$row['price'],'">';
                                echo'<p><input type="submit" value="カートに追加"></p>';
                                echo'</form>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>