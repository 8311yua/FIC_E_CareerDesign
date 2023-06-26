<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>座席予約</title>
  <link rel="stylesheet" href="seat.css">
</head>
<body>
    <form class="form" action="seat_check.php" method="post">
        <img src="seat.png" alt="座席表">
        <div class="float_input">
            <!--   ジャンル -->
            <div class="seat">
            <fieldset>
            <legend>座席</legend>
            <label for="カウンター">カウンター</label>
            <input type="radio" class="check" name="seat" value="カウンター" id="カウンター" checked>
            <label for="2人席">2人席</label>
            <input type="radio" class="check" name="seat" value="2人席" id="2人席">
            <label for="4人席">4人席</label>
            <input type="radio" class="check" name="seat" value="4人席" id="4人席">
            </fieldset>
            <script>
            function isCheck() {
                let arr_checkBoxes = document.getElementsByClassName("check");
                let count = 0;
                for (let i = 0; i < arr_checkBoxes.length; i++) {
                    if (arr_checkBoxes[i].checked) {
                        count++;
                    }
                }
                if (count > 0) {
                    return true;
                } else {
                    window.alert("座席の種類を選択してください。");
                    return false;
                };
            }
            </script>
            </div>

            <div class="seat">
            <label  class="label_left" for="prefecture">人数</label>
            <select name="prefecture" id="prefecture" required>
            <option value="" hidden>以下から選択してください</option>
            <option value="1人" selected>1人</option>
            <option value="2人">2人</option>
            <option value="3人">3人</option>
            <option value="4人">4人</option>
            <option value="5人以上">5人以上</option>
            </select><br>
            </div>
            <div class="seat">
            <?php require '../server.php' ?>
            <?php
            // $dsn = 'mysql:dbname=reserve_bakery;host=localhost;charset=utf8';
            // $user = 'discipline';
            // $password = 'tr_2146';

            // $pdo=new PDO($dsn, $user, $password);
            

            $sql = 'SELECT * FROM seat_reservation';
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();           
            ?>
            <div class="seat">
            <!-- <label for="date" class="col-form-label">日時を入力</label>
            <input type="datetime-local" class="form-control" id="date" name="date"> -->

            <?php
            $date = new DateTime();
            $now = $date->format('m/d');
            $af1_day = $date->modify('+1 days')->format('m/d');
            $af2_day = $date->modify('+1 days')->format('m/d');
            $af3_day = $date->modify('+1 days')->format('m/d');
            $af4_day = $date->modify('+1 days')->format('m/d');
            $af5_day = $date->modify('+1 days')->format('m/d');
            $af6_day = $date->modify('+1 days')->format('m/d');
            ?>
            <!-- 日時を入力 -->
            <div class="seat">
            <label  class="label_left">来店日</label>
            <?php
            echo '<select name="visit_day" class="visit_day">';
            echo '<option value="', $now, '">', $now, '</option>';
            echo '<option value="', $af1_day, '">', $af1_day, '</option>';
            echo '<option value="', $af2_day, '">', $af2_day, '</option>';
            echo '<option value="', $af3_day, '">', $af3_day, '</option>';
            echo '<option value="', $af4_day, '">', $af4_day, '</option>';
            echo '<option value="', $af5_day, '">', $af5_day, '</option>';
            echo '<option value="', $af6_day, '">', $af6_day, '</option>';
            echo '</select>';
            
            
            echo "<table>\n";
            echo "\t<tr><th>$now</th><th>$af1_day</th><th>$af2_day</th><th>$af3_day</th><th>$af4_day</th><th>$af5_day</th><th>$af6_day</th></tr>\n";
            echo "\t<tr>\n";
            echo "\t\t<td>Y</td>\n";
            echo "\t\t<td>m</td>\n";
            echo "\t\t<td>d</td>\n";
            echo "\t\t<td>H</td>\n";
            echo "\t\t<td>i</td>\n";
            echo "\t\t<td>s</td>\n";
            echo "\t</tr>\n";
            echo "</table>\n";
            ?>
            </div> 
            <div class="btns">
                <input type="submit" value="登録" onClick="return isCheck()"><br>
            </div>
    </form>     
    </div>
</body>
</html>