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
        <link href="css/test.css" rel="stylesheet" />

    </head>
    <body>
        <section class="page-section about-heading">
        <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
            <div class="container">
                <!-- ログイン画面 -->
                <div class="login-wrap">
                <div class="login-html">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">ログイン</label>
                    <!-- ログイン画面 -->
                    <div class="login-form">
                    <div class="sign-in-htm">
                        <div class="group">
                            <!-- 入力内容をlogin-output.phpへ -->
                            <form action="login-output.php" method="post">
                        <label for="user" class="label">ユーザー名</label>
                        <input name="name" id="user" type="text" class="input">
                        </div>
                        <div class="group">
                        <label for="pass" class="label">パスワード</label>
                        <input name="password" id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                        <input type="submit" class="button" value="ログイン">
                            </form>
                            <a href="sign_up_input.php">新規登録</a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </body>
</html>