<section class="product spad">
    <div class="container">
        <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
                <div class="row">
					<?php error_reporting(0); ?>
					<?php session_start(); ?>
                    <?php
					if (!isset($_SESSION['customer'])) {
						echo '購入手続きを行うにはログインしてください。';
					} else 
                    if(!empty($_SESSION['Food'])){
                        echo'<table>';
                        	echo'<th>商品名</th><th>価格</th><th>個数</th><th>小計</th>';
                        	$total=0;
                        	foreach($_SESSION['Food'] as $id=>$Food){
                            	echo'<tr>';
                            	echo'<td>',$Food['name'],'</td>';
                            	echo'<td>',$Food['price'],'</td>';
                            	echo'<td>',$Food['count'],'</td>';
                            	$subtotal1=$Food['price']*$Food['count'];
                            	$total+=$subtotal1;
                            	echo'<td>',$subtotal1,'</td>';
                            	echo'<td><a href="Cart-delete.php?id=', $id, '">削除</a></td>';
                            	echo'</tr>';
                        	}
                        	// 小計の合計
                        	echo'<tr><td>合計</td><td></td><td></td><td>',$total,'</td><td></td></tr>';
                        	echo'</table>';
                        	echo'<p></p>';
                        	echo'<p></p>';
                        	echo'<p>内容をご確認いただき、購入を確定してください。</p>';
                        	echo'<a href="purchase-output.php">購入を確定する</a>';
                        echo'</table>';
                    }else{
                        echo 'カートに商品がありません';
                    }
					echo'<a href="menu.php">一覧に戻る</a>';                    ?>
                </div>
            </div>
        </div>
    </div>
</section>