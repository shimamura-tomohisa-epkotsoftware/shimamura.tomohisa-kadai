<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>式と演算子課題（2）回答</title>
</head>
<body>
    <?php
        //（1）計算結果の予測、検証
        echo "(1)";
        echo "<br>";

        echo "2+4-5の予測は ". 1;
        echo "<br>";
        echo "実際の計算結果は ". 2 + 4 - 5; 
        echo "<br>";

        echo "4-5+2の予測は ". 1;
        echo "<br>";
        echo "実際の計算結果は ". 4 - 5 + 2; 
        echo "<br>";
        echo "<br>";

        echo "4×5÷2の予測は ". 10;
        echo "<br>";
        echo "実際の計算結果は ". 4 * 5 / 2; 
        echo "<br>";

        echo "5÷2×4の予測は ". 10;
        echo "<br>";
        echo "実際の計算結果は ". 5 / 2 * 4; 
        echo "<br>";
        echo "<br>";

        //（2）計算結果の予測、検証
        echo "(2)";
        echo "<br>";

        echo "2×3+4+1の予測は ". 11;
        echo "<br>";
        echo "実際の計算結果は ". 2 * 3 + 4 + 1; 
        echo "<br>";

        echo "2×(3+4+1)の予測は ". 16;
        echo "<br>";
        echo "実際の計算結果は ". 2 * ( 3 + 4 + 1 ); 
        echo "<br>";
        echo "<br>";

        //（3）if文
        echo "(3)";
        echo "<br>";

        echo "・trueが表示される条件は、" . "$" . "username = Adminをif文の前に追加する";
        echo "<br>";
        echo "実行結果（ture）";
        $username = "Admin";
        echo "<br>";
        if ($username == "Admin") {
            echo "Welcome to the adomin page.";
        } else {
            echo "Welcome to the user page.";
        }
        echo "<br>";

        echo "・falseを実行するためには、" . "$" . "username=AdminのAdminを例えばsomeoneを指定する";
        echo "<br>";
        echo "実行結果（false）";
        echo "<br>";
        if ($username == "someone") {
            echo "Welcome to the adomin page.";
        } else {
            echo "Welcome to the user page.";
        }
        echo "<br>";
        echo "<br>";

        //（4）適当な配列に複数を値を保存、保存した値をループ処理で順番に表示
        echo "(4)";
        echo "<br>";

        $arr = [
            "apple", "orange", "greap", "strawberry"
        ];

        foreach ($arr as $arban) {
            echo $arban . "、";
        }
        echo "<br>";
        echo "<br>";

        //（5）（4）の配列をsort関数でアルファベット順に
        echo "(5)";
        echo "<br>";

        $arr = [
            "apple", "orange", "greap", "strawberry"
        ];

        sort($arr);
        
        foreach ($arr as $arban) {
            echo $arban . "、";
        }
        echo "<br>";
        echo "<br>";

        //（6）多次元配列を作成、foreach文とwhile文をそれぞれ記述
        //マジックナンバーを避けるために定数にする
        echo "(6)";
        echo "<br>";

        //多次元配列
        $Japan = [
            ["sapporo", "aomori", "sendai", "tokyo"],
            ["osaka", "kyoto", "hukuoka", "okinawa"]
        ];

        echo "foreach文で表示";
        echo "<br>";
        
        foreach($Japan as $keyA => $value1) { //foreach文
            echo $keyA."<br>";
                foreach ($value1 as $keyB => $value2) {
                    echo $value2 . "<br>";
                }
        }
        echo"<br>";

        echo "while文で表示";
        echo "<br>";

            $keyA = 0;
			$keyB = 0;
			while ($keyA < count($Japan)) { // 大きい配列の数を数える
                echo $keyA. "<br>";
				while ($keyB < count($Japan[$keyA])) { // 小さい配列の数を数える
					echo $Japan[$keyA][$keyB] . "<br/>";
					$keyB++;
				}
				$keyB = 0;
				$keyA++;
			}
        
    ?>
</body>
</html>