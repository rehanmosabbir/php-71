<?php

    /*
        * PHP operator
            * Arithmetic  Operator
                * Binary(+,-,*,/,%)
                * Unary(++,--,(-))
            * Assignment Operator(+=,-=,*=,/=,%=)
            * Conditional Operator(>,>=,<,<=,==,!=,===,!==)
            * Logical Operator(&&,||,!)
     */

    /*
        * ========= Arithmetic Operator ==========
     */

    // ======== Binary Operator(+,-,*,/,%) =========
    // $a = 10;
    // $b = 20;
    // echo $a + $b;//30
    // echo "<br>";
    // echo $a - $b;//-10
    //echo "<br>";
    // echo $a * $b;//200
    //echo "<br>";
    // echo $a / $b;//0.5
    //echo "<br>";
    // echo $a % $b;// 20)10(
    //echo "<br>";

    // ======== Unary Operator(++,--,(-)) =========
//     $a = 10;
//     echo $a++;
//     echo '<br>';
//     echo $a;
//     echo '<br>';
//
//    $a = 10;
//    echo ++$a;
//    echo '<br>';
//    echo $a;
//    echo '<br>';
//
//    $a = 10;
//    echo $a--;
//    echo '<br>';
//    echo $a;
//    echo '<br>';
//
//    $a = 10;
//    echo --$a;
//    echo '<br>';
//    echo $a;
//    echo '<br>';
//
//    $a = -10;
//    echo -$a;
//    echo '<br>';


     /*
        * ========= Assignment Operator(=,+=,-=,*=,/=,%=) ==========
     */

//    $x = 10;
//    $y = 20;
//    echo $x += $y;// $x = $x + $y 30
//    echo '<br>';
//    echo $x -= $y;// 10
//    echo '<br>';
//    echo $x *= $y;// 200
//    echo '<br>';
//    echo $x /= $y;// 10
//    echo '<br>';
//    echo $x %= $y; // 10
//    echo '<br>';

    /*
        * ========= Conditional Operator(>,>=,<,<=,==,!=,===,!==) ==========
     */

//    $x = 20;
//    $y = '20';
//
//    echo $x < $y;
//    echo '<br>';
//    echo '========';
//    echo $x <= $y;
//    echo '<br>';
//    echo '========';
//    echo $x > $y;
//    echo '<br>';
//    echo '========';
//    echo $x >= $y;
//    echo '<br>';
//    echo '========';
//    echo $x == $y;
//    echo '<br>';
//    echo '========';
//    echo $x != $y;
//    echo '<br>';
//    echo '========';
//    echo $x === $y;
//    echo '<br>';
//    echo '========';
//    echo $x !== $y;
//    echo '<br>';
//    echo '========';

    /*
        * ========= Logical Operator(&&,||,!) ==========
     */


    $x = 10;
    $y = 20;
    $z = 30;

    echo ($x < $y) && ($y < $z);
    echo '<br>';
    echo "====================";
    echo '<br>';

    echo ($x > $y) && ($y < $z);
    echo '<br>';
    echo "====================";
    echo '<br>';

    echo ($x < $y) && ($y > $z);
    echo '<br>';
    echo "====================";
    echo '<br>';

    echo ($x > $y) && ($y > $z);
    echo '<br>';
    echo "====================";
    echo '<br>';

    echo ($x < $y) || ($y < $z);
    echo '<br>';
    echo "====================";
    echo '<br>';

    echo ($x > $y) || ($y < $z);
    echo '<br>';
    echo "====================";
    echo '<br>';

    echo ($x < $y) || ($y > $z);
    echo '<br>';
    echo "====================";
    echo '<br>';

    echo ($x > $y) || ($y > $z);
    echo '<br>';
    echo "====================";
    echo '<br>';


    $a = true;
    echo !$a;

























