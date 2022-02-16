<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functionデータ</title>
</head>
<body>
    <?php

    //関数課題1
    function addition($number1, $number2) { //足し算
        $number1 = $number1 + $number2;
        return $number1;
    }

    function subtraction($number1, $number2) { //引き算
        $number1 = $number1 - $number2;
        return $number1;
    }

    function multiplication($number1, $number2) { //掛け算
        $number1 = $number1 * $number2;
        return $number1;
    }

    function division($number1, $number2) { //割り算
        $number1 = $number1 / $number2;
        return $number1;
    }

    function surplus($number1, $number2) { //剰余
        $number1 = $number1 % $number2;
        return $number1;
    }

    //関数課題2
    function addition2(&$number1, &$number2) { //足し算
        $number1 = $number1 + $number2;
        return $number1;
    }

    function subtraction2(&$number1, &$number2) { //引き算
        $number1 = $number1 - $number2;
        return $number1;
    }

    function multiplication2(&$number1, &$number2) { //掛け算
        $number1 = $number1 * $number2;
        return $number1;
    }

    function division2(&$number1, &$number2) { //割り算
        $number1 = $number1 / $number2;
        return $number1;
    }

    function surplus2(&$number1, &$number2) { //剰余
        $number1 = $number1 % $number2;
        return $number1;
    }

    ?>
</body>
</html>