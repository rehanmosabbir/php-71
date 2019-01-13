<?php
/**
 * Created by PhpStorm.
 * User: t
 * Date: 1/13/2019
 * Time: 11:37 AM
 */

    class OddEven{
        public function oddEvenCalculation($data){
//            echo '<pre>';
//            print_r($data);

            $firstNumber = $data['first_number'];
            $secondNumber = $data['second_number'];
            $choice = $data['choice'];
            if($firstNumber < $secondNumber){
                switch ($choice){
                    case 'odd':
                        $result = '';
                        for ($i = $firstNumber; $i <= $secondNumber;$i++){
                            if($i%2 == 1){
                                $result.=$i.' ';
                            }
                        }
                        return $result;
                    break;
                    case 'even':
                        $result = '';
                        for ($i = $firstNumber; $i <= $secondNumber;$i++){
                            if($i%2 != 1){
                                $result.=$i.' ';
                            }
                        }
                        return $result;
                    break;

                }

            }else {

                switch ($choice){
                    case 'odd':
                        $result = '';
                        for ($i = $firstNumber; $i >= $secondNumber;$i--){
                            if($i%2 == 1){
                                $result.=$i.' ';
                            }
                        }
                        return $result;
                    break;
                    case 'even':
                        $result = '';
                        for ($i = $firstNumber; $i >= $secondNumber;$i--){
                            if($i%2 != 1){
                                $result.=$i.' ';
                            }
                        }
                        return $result;
                    break;

                }
            }
        }
    }