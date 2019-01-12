<?php
/**
 * Created by PhpStorm.
 * User: t
 * Date: 1/12/2019
 * Time: 12:16 AM
 */

    class FullName{
        public function makeFullName($data){
//            echo '<pre>';
//            print_r($data);
            $firstName = $data['first_name'];
            $lastName = $data['last_name'];
            $fullName = $firstName.' '.$lastName;
            return $fullName;
        }
    }