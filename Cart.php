<section class="product spad">
    <div class="container">
        <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
                <div class="row">
                    <?php
                    if(!empty($_SESSION['Food'])){
                        echo'<table>';
                        echo'<th>商品番号</th><th>商品名</th>';
                        echo'<th>価格</th><th>個数</th><th>小計</th>';
                        $total=0;
                        foreach($_SESSION['Food'] as $id=>$Food){
                            echo'<tr>';
                            echo'<td>',$id,'</td>';
                            echo'<td><a href="Food.php?id=',$id,'">',$Food['name'],'</a></td>';
                            echo'<td>',$Food['price'],'</td>';
                            echo'<td>',$Food['count'],'</td>';
                            $subtotal1=$Food['price']*$Food['count'];
                            $total+=$subtotal1;
                            echo'<td>',$subtotal1,'</td>';
                            echo'<td><a href="Cart-delete.php?id=', $id, '">削除</a></td>';
                            echo'</tr>';
                        }
                        echo'<tr><td>合計</td><td></td><td></td><td></td><td>',$total,'</td><td></td></tr>';
                        echo'</table>';
                    }else{
                        echo 'カートに商品がありません';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>