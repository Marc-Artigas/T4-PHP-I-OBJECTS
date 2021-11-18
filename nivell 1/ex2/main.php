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
        
    }
     //creació objectes
        $triangle1=new Triangle('6','4');
        $triangle1->area();
        // $triangle1->area();

?>