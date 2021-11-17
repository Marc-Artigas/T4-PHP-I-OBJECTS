<?php



    class Employee{
        //atributs de classe
        public $nom;
        // public $sou;

        //mètodes de classe. Paràmetres nom i sou
        public function initialize($nombre){
            $this->nom=$nombre;
            // $this->sou=$sueldo;
        }
        //imprimir el nom i un misstage per saber si ha de pagar impostos (si sou>6000 paga impostos)
        public function print(){
            echo $this->nom;
            echo '<br>';
           
        }

        
    }
    
    //creació i assignació d'objectes
 
    $treb1=new Employee();
    $treb1->initialize('Joan');
    $treb1->print();
    
    // $treb1->initialize('Joan','12000');
    // $treb1->print();



?>