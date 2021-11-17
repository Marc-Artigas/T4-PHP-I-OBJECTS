<?php

    class Shape{
        //atributs
        public $ample;
        public $alt;
        //mètodes
        function __construct($ample,$alt){
            $this->ample=$ample;
            $this->alt=$alt;
        }
        public function print(){
            echo $this->ample.'<br>';
            echo $this->alt.'<br>';
        }

        // //prova
        // public function areatriangle(){
        //     echo ($this->ample*$this->alt)/2;
        }
        
    }
     //creació objectes
        $triangle1=new Shape('6','4');
        $triangle1->print();
        // $triangle1->areatriangle();






?>