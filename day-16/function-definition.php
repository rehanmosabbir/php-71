<?php

    function makeFullName($data){
        $firstName = $data['first_name'];
        $lastName = $data['last_name'];

        $fullName = $firstName.' '.$lastName;
        return $fullName;
    }

    function wordCharacterCount($data){
        $givenString = $data['given_string'];
        $result = array();
        $result['totalNumberOfStrings'] = strlen($givenString);
        $result['totalNumberOfWords'] = str_word_count($givenString);
        return $result;
    }

    function createPassword($data){
        $password = '';
        $givenLength = $data['given_length'];
        $character = array('%','$','#','@','&','*','!','0','2','8','d','r','y','h','q');

        for ($i = 1; $i <= $givenLength;$i++){
            $index = rand(0,14);
            $password .= $character[$index];
        }
        return $password;

    }



