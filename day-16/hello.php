<?php
 class HelloWorld {
     public $name = 'BITM';
     public $city = 'Dhaka';

     function add(){
         echo 'Hello World';
     }
     function sub(){
         echo 'Hello Bangladesh';
     }

 }


 $objHelloWorld = new HelloWorld();
 $objHelloWorld->add();