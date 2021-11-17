<?php



    class Employee{
        //atributs de classe
        private $nom;
        private $sou;

        //mètodes de classe. Paràmetres nom i sou
        public function initialize($nom,$sou){
            $this->nom=$nom;
            $this->sou=$sou;
        }
        //imprimir el nom i un misstage per saber si ha de pagar impostos (si sou>6000 paga impostos)
        public function print(){
            echo "Treballador: ".$this->nom."."." Cobra ".$this->sou."€. "; 
                  
            if($this->sou>6000){
                echo "Ha de pagar impostos.";
            } else {
                echo "No ha de pagar impostos.";
            }
            echo '<br>';
            
           
        }

        
    }
    
    //creació i assignació d'objectes
 
    $treb1=new Employee();
    $treb1->initialize('Joan','12000');
    $treb1->print();

    $treb2=new Employee();
    $treb2->initialize('David','5800');
    $treb2->print();
    
    



?>