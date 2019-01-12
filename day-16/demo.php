<?php


    class Demo{

        public $name = 'Basis';
        protected $city = 'Dhaka';
        private $country = 'Bangladesh';


        public function addition($x,$y){
//            echo $this->remainder();
            $z = $x + $y;
            echo $z;
        }

        protected function subtraction(){
            $res =  'In subtraction';
            echo $res;
        }

        private function remainder(){
            echo 'In remainder';
        }
    }