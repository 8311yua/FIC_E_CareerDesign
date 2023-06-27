<p>商品を追加します</p>
<li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="food_input.php">ごはん</a></li>
<!-- <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="listinput.php">飲み物</a></li> -->
<form action="food_output.php" method="post" enctype="multipart/form-data">
    <p>商品名
        <input type="text" name="name" value="">
    </p>
    <p>※画像のファイル名は英語のファイルをアップして下さい</p>
    <p>画像
        <input type="file" name="image">
    </p>
    <p>price
        <input type="text" name="price">
    </p>
    <p><input type="submit" name="submit" value="追加"></p>
</form>


