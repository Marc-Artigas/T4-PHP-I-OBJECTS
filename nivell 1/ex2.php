<?php

    class Shape{
        //atributs de classe
        public $ample;
        public $alt;
        
    
        //mètodes
        //constructor
    function__construct($ample,$alt){
        $this->ample=$ample;
        $this->alt=$alt;
    }


        //classe filla
        class Triangle extends Shape{
            //mètodes classe triangle
            public function areatriangle(){
                return ($this->ample * $this->alt)/2;
            }
        }

        //classe filla
        class Rectangle extends Shape{
            public function areatriangle(){
                return ($this->ample * $this->alt);
            }
        }


}

    //creació d'objectes
    


?>