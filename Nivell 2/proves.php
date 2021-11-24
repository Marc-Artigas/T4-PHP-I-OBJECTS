<?php
// vull acumular el nombre de vegades que  rand ens dóna un número.


    $figura=rand(1,6);
    // echo $figura;
    // $valor=$figura-$figura+1;
    // echo $valor;
    $tirades=0;
    $totalTirades=0;
    if($figura<7){

   
    
        echo $figura."<br>";
        $tirades++;
        echo $tirades."<br>";

        $totalTirades=$totalTirades+$tirades;
        echo $totalTirades;
    }
    


?>