<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>関数課題</title>
</head>
<body>
    
    <?php  
    include('php_kadai5_function.php');
    ?>
    
    <?php
    //関数課題1
    //第一引数上書き
    echo "関数課題1";
    echo "<br>";

    echo "第一引数:20";
    echo "<br>";
    echo "第二引数:10";
    echo "<br>";

    $number1 = 20;
    $number2 = 10;

    echo "足し算";
    echo "<br>";
    
    echo addition($number1, $number2); //足し算
    echo "<br>";
    echo "<br>";
    
    echo "引き算";
    echo "<br>";

    echo subtraction($number1, $number2); //引き算
    echo "<br>";
    echo "<br>";

    echo "掛け算";
    echo "<br>";

    echo multiplication($number1, $number2); //掛け算
    echo "<br>";
    echo "<br>";

    echo "割り算";
    echo "<br>";

    echo division($number1, $number2); //割り算
    echo "<br>";
    echo "<br>";

    echo "剰余";
    echo "<br>";

    echo surplus($number1, $number2); //剰余
    echo "<br>";
    echo "<br>";

    //関数課題2
    echo "関数課題2";
    echo "<br>";
    echo "予想：変数a,bに事前入れた値を使って計算する";
    echo "<br>";
    echo "<br>";

    echo "事前に設定した第一引数:5（変数a）";
    echo "<br>";
    echo "事前に設定した第二引数:4（変数b）";
    echo "<br>";
    echo "<br>";

    $a = 5; //第一引数事前設定
    $b = 4; //第二引数事前設定

    echo "足し算";
    echo "<br>";

    echo addition2($a, $b);
    echo "<br>";
    echo "<br>";

    echo "引き算";
    echo "<br>";

    echo subtraction2($a, $b);
    echo "<br>";
    echo "<br>";

    echo "掛け算";
    echo "<br>";

    echo multiplication2($a, $b);
    echo "<br>";
    echo "<br>";

    echo "割り算";
    echo "<br>";

    echo division2($a, $b);
    echo "<br>";
    echo "<br>";

    echo "剰余";
    echo "<br>";

    echo surplus2($a, $b);
    echo "<br>";

    ?>
</body>
</html>