<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre i operacions</title>
</head>
<body>

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
            $this->saldoActual=($_POST["Saldo"]);
            $this->nom=($_POST["Nom"]);
            $this->cognom=($_POST["Cognom"]);
            $importIngrés=($_POST["Ingressar"]);
            
            
            echo "El saldo inicial del client és de ".$this->saldoActual."€."."<br>";
            $this->saldoActual=$this->saldoActual+$importIngrés;
            echo "El client ".$this->nom." ".$this->cognom." ha ingressat ".$importIngrés."€. Actualment té un saldo de ".$this->saldoActual."€."."<br>";
            
        }

        public function withdraw($importRetirar){   
            $this->saldoActual=($_POST["Saldo"]);
            $this->nom=($_POST["Nom"]);
            $this->cognom=($_POST["Cognom"]);
            $importIngrés=($_POST["Ingressar"]);
            $importRetirar=($_POST["Retirar"]);
            echo "El saldo inicial del client és de ".$this->saldoActual."€."."<br>";      
                if($this->saldoActual>$importRetirar){
                    $this->saldoActual=$this->saldoActual-$importRetirar;
                    echo "El client ".$this->nom." ".$this->cognom." ha retirat ".$importRetirar."€. Actualment té un saldo de ".$this->saldoActual."€."."<br>";
            } else {
                    echo "L'import sol·licitat de ".$importRetirar."€, és superior al saldo disponible."."<br>";
                    // echo $this->saldoActual;
            }
        }

    }


        //objectes
        $client1 = new Account ('($_POST["Número de compte"])', '($_POST["Nom"])', '($_POST["Cognom"])', '($_POST["Saldo"])');
        
        // $client1 -> deposit(1);
        // $client1 -> deposit(4);
        // $client1 -> deposit(4);
        // $client1 -> withdraw(1);
        // $client1 -> withdraw(4);
        // $client1 -> deposit()
        if(($_POST["Ingressar"])>0){
        $client1 -> deposit($_POST["Ingressar"]);
    } else {
        $client1 -> withdraw($_POST["Retirar"]);
    }

        // $client2 = new Account ('ES002','Toni','Pagès','25');
        // $client2 -> deposit(1);
        // $client2 -> deposit(4);
        // $client2 -> deposit(4);
        // $client2 -> withdraw(1);
        // $client2 -> withdraw(4);
        // $client2 -> withdraw(40);
        // $client2 -> deposit(5);
        // $client2 -> withdraw(40);


?>

<form action="index.html" >
        
        <input type="submit" value="Tornar">
   </form>
    
</body>
</html>