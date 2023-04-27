<?php
$sql = $pdo->prepare('select * from food where id=?');
$sql->execute([$_REQUEST['id']]);
?>

<!-- Product Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="col-lg-6 col-md-6 back">
            <a href="index.php" class="back_link">一覧へ戻る</a>
        </div>
        <div class="anime__details__content">
            <div class="row">
                <!-- img -->
                <div class="col-lg-5" id="title_img">
                    <div class="hero__slider owl-carousel">
                        <?php
                        foreach ($sql as $row) {
                            echo '<div class="hero__items set-bg" data-setbg="img/', $row['image1'],'">';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <!-- img end -->
                <div class="col-lg-7 id="product_overview">
                    <div class="anime__details__text">
                        <!-- title -->
                        <div class="anime__details__title">
                        <?php
                            echo '<h3>', $row['title'], '</h3>';
                            echo '<span><a href="download_files/', $row['file'],'" class="download_link">ダウンロード</a></span>';
                        ?>
                        </div>
                        <!-- title end -->
                        <p>
                        <?php
                            echo $row['overview'];
                        ?>
                        </p>
                        <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-12 col-md-8">
                                    <ul>
                                        <?php
                                            //タブレットの場合、スマホの場合のみ改行
                                            echo '<li><span>一番アピールしたいこと</span><br class="tb-br"><br class="sp-br"> ', $row['appeal_point'], '</li>';
                                            echo '<li><span>補足説明</span><br class="tb-br"><br class="sp-br"> ', $row['supplement'], '</li>';
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<?php require 'footer.php' ?>