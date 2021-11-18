<?php

    class Triangle extends Shape{
        public function areaTriangle(){
            echo "Si base = ".$this->ample." i altura = ".$this->alt.". Àrea del triangle = ".(($this->ample*$this->alt)/2)."<br>";
    }

}

?>