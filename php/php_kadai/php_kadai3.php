<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>制御文課題</title>
</head>
<body>
    <?php
    //（1）表示されるたびにランダムでif elseif elseのどれかの処理が行う
    echo "（1）";
    $x = rand(1,6);
    $a = "今日の運勢は";
    $b = "です";
    echo "<br>";
    
    if ($x == 1) {
        echo $a . "大凶" . $b;    
    } elseif ($x == 2) {
        echo $a . "大凶" . $b;
    } elseif ($x == 3) {
        echo $a . "末吉" . $b;
    } elseif ($x == 4) {
        echo $a . "吉" . $b;
    } elseif ($x == 5) {
        echo $a . "中吉" . $b;
    } else {
        echo $a . "大吉" . $b;
    }
    echo "<br>";

    //(2)三項演算子を使用し、ランダムにメッセージを表示するプログラム
    echo "(2)";
    echo "<br>";
    
    $number = rand(1, 2);
    echo ($number === 1) ? '奇数です' : '偶数です' ;
    echo "<br>";

    //（3）1～4の数値をランダム変数に保存、それがどの値かswitch文で確認するプログラム
    echo "(3)";
    echo "<br>";

    $number = rand(1, 4);
    switch ($number) {
        case $number === 1:
            echo $number;
            break;
        case $number === 2:
            echo $number;
            break;
        case $number === 3:
            echo $number;
            break;
        case $number === 4:
            echo $number;
            break;
    }
    echo "<br>";
    echo "<br>";

    //（4）（3）をコピーしbreak文を抜いた処理の予測、実際
    echo "(4)";
    echo "<br>";

    echo "予測：エラーが出る";
    echo "<br>";

    echo "実際";
    echo "<br>";

    $number = rand(1, 4);
    switch ($number) {
        case 1:
            echo "1番です。";
        case 2:
            echo "2番です。";
        case 3:
            echo "3番です。";
        case 4:
            echo "4番です。";
    }
    echo "<br>";
    echo "<br>";

    //（5）（3）をコピーし数値を1～6に変更、default文で1～4以外はエラー表示
    echo "(5)";
    echo "<br>";

    $number = rand(1, 6);
    switch ($number) {
        case 1:
            echo "1番です";
        case 2:
            echo "2番です";
        case 3:
            echo "3番です";
        case 4:
            echo "4番です";
        default:
            echo '1～4以外なのでエラーです';
    }
    echo "<br>";
    echo "<br>";

    //(6)（3）をコピーしswitch文をendswitch文に
    echo "(6)";
    echo "<br>";

    $number = rand(1, 4);
    switch ($number) :
        case $number === 1:
            echo $number;
            break;
        case $number === 2:
            echo $number;
            break;
        case $number === 3:
            echo $number;
            break;
        case $number === 4:
            echo $number;
            break;
    endswitch;

    echo "<br>";
    echo "<br>";

    //（7）whileループで10回ループ処理、回数を数える
    echo "(7)";
    echo "<br>";

    $i = 1;
    while ($i <= 10) {
        echo $i . "回目のループです";
        echo "<br>";
        $i++;
    }

    echo "<br>";
    echo "<br>";

    //（8）do～whileで10回ループ、ループ数を数える
    echo "(8)";
    echo "<br>";

    $i = 1;
    do{ 
        echo $i . "回目のループです";
        echo "<br>";
        $i ++;
    } while ($i <= 10);

    echo "<br>";
    echo "<br>";

    //（9）ゼロで割り算を避ける
    echo "(9)";
    echo "<br>";

    for ($counter = -3; $counter < 10; $counter++) {
        if ($counter === 0) {
            echo "ゼロで割り算出来ません。ループから抜けました。";
            echo "<br>";
            break;
        }
        echo 100 / $counter;
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";

    //（10）(9)をbreak→continueに
    echo "(10)";
    echo "<br>";

    echo "予測:0で割り算する部分で無限ループする";
    echo "<br>";

    for ($counter = -3; $counter < 10; $counter++) {
        if ($counter === 0) {
            continue;
        }
        echo 100 / $counter;
        echo "<br>";
    }

    ?>
</body>
</html>