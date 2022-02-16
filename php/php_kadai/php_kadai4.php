<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>配列課題</title>
</head>
<body>
    <?php
    //（1）arrayで平日の曜日の文字列の配列を作成、表示
    echo "(1)";
    echo "<br>";

    $week = array("月曜", "火曜", "水曜", "木曜", "金曜");
    foreach($week as $day) {
        echo ($day);
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";

    //（2）英語→日本語の連想配列
    echo "(2)";
    echo "<br>";

    $lange = [
    "cat" => "猫", "apple" => "りんご", "history" => "歴史", "laboratory" => "実験室", 
    "computer science" => "計算機科学", "Chemical Sensitivity" => "化学物質過敏症"
    ];

    foreach($lange as $langeen => $langeja) {
        echo "$langeen => $langeja";
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";

    //(3)問（1）と問（2）の配列から好きな値を選び表示
    echo "(3)";
    echo "<br>";

    echo $week[2];

    echo $lange['apple'];
    echo "<br>";
    echo "<br>";

    //(4)問(1)と問(2)の配列の要素数を数えて表示
    echo "(4)";
    echo "<br>";

    $count1 = count($week);
    echo "問（1）の配列数は" . $count1 . "です";
    echo "<br>";

    $count2 = count($lange);
    echo "問（2）の配列数は" . $count2 . "です";
    echo "<br>";

    echo "<br>";
    echo "<br>";

    //(5)多次元連想配列（リテラル、マジックナンバーを使わない）
    echo "(5)";
    echo "<br>";

    $data = [
        ["fruit1" => "りんご", "fruit2" => "メロン", "fruit3" => "ブルーベリー"],
        ["food1" => "カレー", "food2" => "ピザ", "food3" => "寿司"]
    ];

    foreach ($data as $key => $value) {
        foreach ($value as $eat => $eat2) {
            echo $key.':'.$eat." " . $eat2 ."<br>";
        }
        
    }

    ?>
</body>
</html>