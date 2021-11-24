<?php
    class Account{
        //atributs
        public $numCompte;
        public $nom;
        public $cognom;
        public $saldoActual;
        //constructor

    
        function __construct($numCompte,$nom,$cognom,$saldoActual){
            $this->numCompte=$numCompte;
            $this->nom=$nom;
            $this->cognom=$cognom;
            $this->saldoActual=$saldoActual;
        }

        public function deposit($importIngrés){
            echo "El saldo inicial del client és de ".$this->saldoActual."€."."<br>";
            $this->saldoActual=$this->saldoActual+$importIngrés;
            echo "El client ".$this->nom." ".$this->cognom." ha ingressat ".$importIngrés."€. Actualment té un saldo de ".$this->saldoActual."€."."<br>";
        }

        public function withdraw($importRetirar){   
            echo "El saldo inicial del client és de ".$this->saldoActual."€."."<br>";      
                if($this->saldoActual>$importRetirar){
                    $this->saldoActual=$this->saldoActual-$importRetirar;
                    echo "El client ".$this->nom." ".$this->cognom." ha retirat ".$importRetirar."€. Actualment té un saldo de ".$this->saldoActual."€."."<br>";
            } else {
                    echo "L'import sol·licitat de ".$importRetirar."€, és superior al saldo disponible."."<br>";
            }
        }

    }

        //objectes
        $client1 = new Account ('ES001', 'Pol', 'Garcia', '10');
        $client1 -> deposit(1);
        $client1 -> deposit(4);
        $client1 -> deposit(4);
        $client1 -> withdraw(1);
        $client1 -> withdraw(4);

        $client2 = new Account ('ES002','Toni','Pagès','25');
        $client2 -> deposit(1);
        $client2 -> deposit(4);
        $client2 -> deposit(4);
        $client2 -> withdraw(1);
        $client2 -> withdraw(4);
        $client2 -> withdraw(40);
        $client2 -> deposit(5);
        $client2 -> withdraw(40);





?>