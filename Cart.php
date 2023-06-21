<?php require 'server.php' ?>
<?php

if(!empty($_SESSION['Food'])){
    echo'<table>';
    echo'<th>商品番号</th><th>商品名</th>';
    echo'<th>価格</th><th>個数</th><th>小計</th>';
    $total=0;
    foreach($_SESSION['Food'] as $id => $Food){
        echo'<tr>';
        echo'<td>',$id,'</td>';
        echo'<td><a href="Food.php?id=',,$id,'">',$Food['name'],'</a></td>';
        echo'<td>',$Food['price'],'</td>';
        echo'<td>',$Food['count'],'</td>';
        $subtotal=$Food['price']*$Food['count'];
        $total+=$subtotal;
        echo'<td>',$subtotal,'</td>';
        echo'</tr>';
    }
    echo'<tr><td>合計</td><td></td><td></td><td></td><td>',$total,'</td><td></td></tr>';
    echo'</table>'
}
?>