<?php

    require_once 'demo.php';

    class Example extends Demo {
        public $color = 'red';
        protected $age = '20';
        private $area = 'local';
        public $a;

        public function __construct($x){
            echo "Hello PHP";

            $this->a = $x;
        }

        public function division(){
//            echo 'In division';
            echo $this->name;
            echo $this->a;
        }

        protected function multiplication(){
            echo 'In multiplication';
            echo $this->a;
        }

        private function hello(){
            echo 'Hello';
            echo $this->a;
        }
    }