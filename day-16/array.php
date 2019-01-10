<?php


//    $number = array(10,20,30);
//    $info = array('name'=>'BITM','city'=>'Dhaka','country'=>'Bangladesh');

//    $data[0] = 10;
//    $data[1] = 20;
//    $data[2] = 30;
//
//    $data['name'] = 'BITM';
//    $data['city'] = 'Dhaka';
//    $data['country'] = 'Bangladesh';

//    echo $number[2];
//    echo '<br>';
//    echo $info['country'];

//    foreach ($data as $v_data){
//        echo $v_data.'<br>';
//    }
//    echo '<pre>';
//    print_r($data);
//    var_dump($data);

    $data = array();

    $data[0][0] = 10;
    $data[0][1] = 20;
    $data[0][2] = 30;

    $data[1][0] = 40;
    $data[1][1] = 50;
    $data[1][2] = 60;

    $data[2][0] = 70;
    $data[2][1] = 80;
    $data[2][2] = 90;

    $data[3][0] = 100;
    $data[3][1] = 110;
    $data[3][2] = 120;

//    echo $data[1][2];
    foreach ($data as $v_data){
//        echo $v_data[0].' '.$v_data[1].' '.$v_data[2].'<br>';
        foreach ($v_data as $v_v_data){
            echo $v_v_data.' ';
        }
        echo '<br>';
    }



























