<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>式と演算子課題（1）回答</title>
</head>
<body>
    <?php
        //（1）文字列比較
        echo "(1)";
        echo "<br>";
    
        if (strcasecmp('abc', 'abc') == 0) {
            echo '同じ文字列です';
        }    else {
            echo '違う文字列です';
        }
        
            echo '<br>';
            echo '<br>';

        //（2）2つ以上の文字列を連結、表示
        echo "(2)";
        echo "<br>";

        echo '1日の挨拶です。'.'「おはよう」'.'「こんにちは」'.'「こんばんは」';
        echo '<br>';
        echo '<br>';

        //（3）文字列を数値を結合して表示する
        echo "(3)";
        echo "<br>";
    
        echo "今日は"."1"."月"."21"."日です";
        echo '<br>';
        echo '<br>';

        //（4）定数を使って文字列作成し表示する ※2通りのプログラムをそれぞれ作成
        echo "(4)";
        echo "<br>";

        define('WORD1', 'PHPの勉強頑張ります');
        echo WORD1;
        echo '<br>';
        
        const WORD2 = 'PHPの勉強に取り組んでいます';
        echo WORD2;
        echo "<br>";
        echo '<br>';

        //（5）行番号とファイル名を表示するプログラムを作る ※標準装備の定数を使用する
        echo "(5)";
        echo "<br>";

        echo "行番号は".__LINE__."です";
        echo "<br>";
        echo "ファイル名は".__FILE__."です";
        echo "<br>";
        echo '<br>';
        
        //（6）300の数値に変数を設定し、365の数値で割った答えを表示する
        echo "(6)";
        echo "<br>";

        $x = 300;
        $y = $x / 365;
        echo "300÷365=". $y;
        echo "<br>";
        echo '<br>';

        //（7）後置加算演算子を使って加算後の結果を表示
        echo "(7)";
        echo "<br>";

        $a = 50;
        echo "設定した変数は" .$a ."です。";
        echo "<br>";
        
        echo "後置加算演算子を使いました " .$a++;
        echo "<br>";
        
        echo "加算後の結果です " .$a;
        echo "<br>";
        echo '<br>';

        //（8）後置減算演算子を使って減算後の結果を表示
        echo "(8)";
        echo "<br>";

        $a = 50;
        echo "設定した変数は" .$a ."です。";
        echo "<br>";
        
        echo "後置減算演算子を使いました " .$a--;
        echo "<br>";
        
        echo "減算後の結果です " .$a;
        echo "<br>";
        echo '<br>';    

        //（9）前置演算子と後置演算子を組み合わせて使う
        echo "(9)";
        echo "<br>";

        $a = 50;
        $b = 50;
        echo "前置演算子用変数は". $a ."、後置演算子用変数は" .$b  ."です";
        echo "<br>";
        echo "前置演算子は". ++$a ."、後置演算子は". $b++ ."です";
        echo "<br>";
        echo '<br>';

        //（10）3と2の数値を設定した変数を用意、足し算の結果を表示
        echo "(10)";
        echo "<br>";

        $x = 3;
        $y = 2;
        $z = $x + $y;
        echo "結果は". $z ."です";
        echo "<br>";
        echo '<br>';

        //（11）1234の数値を文字列に変換し、var_dump関数を用いて型を表示
        echo "(11)";
        echo "<br>";

        $x = (string) 1234;
        var_dump($x);
        echo "<br>";
        echo '<br>';

        //（12）ソースを修正する
        echo "(12)";
        echo "<br>";

        $locations = 3;
        $c = $locations + 2;
        print($c);
        echo "<br>";

    ?>

</body>
</html>