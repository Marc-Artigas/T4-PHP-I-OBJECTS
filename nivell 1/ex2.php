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

        }

        //classe filla
        class Rectangle extends Shape{

        }


}


?>