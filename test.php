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
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

