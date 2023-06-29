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
            <input type="radio" class="check" name="seat_type" value="1" id="カウンター" checked>
            <label for="2人席">2人席</label>
            <input type="radio" class="check" name="seat_type" value="2" id="2人席">
            <label for="4人席">4人席</label>
            <input type="radio" class="check" name="seat_type" value="4" id="4人席">
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
            <label  class="label_left" for="num_people">人数</label>
            <select name="num_people" id="num_people" required>
            <option value="" hidden>以下から選択してください</option>
            <option value="1" selected>1人</option>
            <option value="2">2人</option>
            <option value="3">3人</option>
            <option value="4">4人</option>
            <option value="5">5人以上</option>
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
            
            
            echo '<select name="visit_time" class="visit_time">';
            echo '<option value="', "06:00", '">', "06:00", '</option>';
            echo '<option value="', "06:30", '">', "06:30", '</option>';
            echo '<option value="', "07:00", '">', "07:00", '</option>';
            echo '<option value="', "07:30", '">', "07:30", '</option>';
            echo '<option value="', "08:00", '">', "08:00", '</option>';
            echo '<option value="', "08:30", '">', "08:30", '</option>';
            echo '<option value="', "09:00", '">', "09:00", '</option>';
            echo '<option value="', "09:30", '">', "09:30", '</option>';
            echo '<option value="', "10:00", '">', "10:00", '</option>';
            echo '<option value="', "10:30", '">', "10:30", '</option>';
            echo '<option value="', "11:00", '">', "11:00", '</option>';
            echo '<option value="', "11:30", '">', "11:30", '</option>';
            echo '<option value="', "12:00", '">', "12:00", '</option>';
            echo '<option value="', "12:30", '">', "12:30", '</option>';
            echo '<option value="', "13:00", '">', "13:00", '</option>';
            echo '<option value="', "13:30", '">', "13:30", '</option>';
            echo '<option value="', "14:00", '">', "14:00", '</option>';
            echo '<option value="', "14:30", '">', "14:30", '</option>';
            echo '<option value="', "15:00", '">', "15:00", '</option>';
            echo '<option value="', "15:30", '">', "15:30", '</option>';
            echo '<option value="', "16:00", '">', "16:00", '</option>';
            echo '<option value="', "16:30", '">', "16:30", '</option>';
            echo '<option value="', "17:00", '">', "17:00", '</option>';
            echo '<option value="', "17:30", '">', "17:30", '</option>';
            echo '<option value="', "18:00", '">', "18:00", '</option>';
            echo '<option value="', "18:30", '">', "18:30", '</option>';
            echo '<option value="', "19:00", '">', "19:00", '</option>';
            echo '</select>';
            ?>
            </div> 
            <div class="btns">
                <input type="submit" value="登録" onClick="return isCheck()"><br>
            </div>
    </form>     
    </div>
</body>
</html>