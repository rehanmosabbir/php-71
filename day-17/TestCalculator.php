<?php

    class TestCalculator{
        function makeCalculator($data){
//            echo '<pre>';
//            print_r($data);

            $firstNumber = $data['first_number'];
            $secondNumber = $data['second_number'];
            $operator = $data['btn'];

            switch ($operator){
                case '+':
                    $result = $firstNumber + $secondNumber;
                    break;
                case '-':
                    $result = $firstNumber - $secondNumber;
                    break;
                case '*':
                    $result = $firstNumber * $secondNumber;
                    break;
                case '/':
                    $result = $firstNumber / $secondNumber;
                    break;
                case '%':
                    $result = $firstNumber % $secondNumber;
                    break;
            }
            return $result;
        }
    }