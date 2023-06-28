<section class="product spad">
    <div class="container">
        <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
                <div class="row">
                    
                    <?php
                    require 'server.php';
                    echo'<table>';
                    echo'<th>商品名</th><th>価格</th><th>個数</th><th>小計</th><th></ht>';
                    echo'</tr>';

                    $total = 0;
                    foreach($pdo->query('select * from product') as $row){
                        echo'<td>',$row['product_name'],'</td>';
                        echo'<td>',$row['product_price'],'</td>';
                        echo'<td>',$row['product_count'],'</td>';
                        $subtotal=$row['product_price']*$row['product_count'];
                        $total = $total + $subtotal;
                        echo'<td>',$subtotal,'</td>';
                        echo'<td><a href="Cart-delete.php?id=', $id, '">削除</a></td>';
                        echo'</tr>';
                    }
                    echo'<tr><td>合計</td><td></td><td></td><td>',$total,'</td><td></td></tr>';
                    echo'</table>';
                    echo'<p></p>';
                    echo'<p></p>';
                    echo'<p>内容をご確認いただき、購入を確定してください。</p>';
                    echo'<a href="purchase-output.php">購入を確定する</a>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>