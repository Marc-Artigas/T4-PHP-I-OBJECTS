<?php

    require "class_triangle.php";
    require "class_rectangle.php";

    class Shape{
        //atributs
        public $ample;
        public $alt;
        //mètodes
        function __construct($atributAmple,$atributAlt){
            $this->ample=$atributAmple;
            $this->alt=$atributAlt;
        }        
        
    }
     //creació objectes
        $triangle1=new Triangle('6','4');
        $triangle1->areaTriangle();

        $rectangle1=new Rectangle('6','4');
        $rectangle1->areaRectangle();
        

?>