<?php
    class PokerDice{
        //atributs de classe
        public $As;
        public $K;
       
        //CONSTRUCTOR
        function __construct($As,$K){
            $this->As=$As;
            $this->K=$K;
        }      
    
        //mètodes
        function thro(){
            $figura=rand(1,6);                    
        }

        function shapeName(){
            $figura=rand(1,6); 
            switch ($figura){
                case "1":
                    echo "As"."<br>";
                    break;
                case "2":
                    echo "K"."<br>";
                    break;
                case "3":
                    echo "Q"."<br>";
                    break;
                case "4":
                    echo "J"."<br>";
                    break;
                case "5":
                    echo "7"."<br>";
                    break;
                case "6":
                    echo "8"."<br>";
                    break;
        
            }
        }
    }

    //creació d'objectes
        $dau1=new PokerDice("As","K");
        $dau1->thro();
        $dau1->shapeName();

        $dau2=new PokerDice("As","K");
        $dau2->thro();
        $dau2->shapeName();

        $dau3=new PokerDice("As","K");
        $dau3->thro();
        $dau3->shapeName();

        $dau4=new PokerDice("As","K");
        $dau4->thro();
        $dau4->shapeName();

        $dau5=new PokerDice("As","K");
        $dau5->thro();
        $dau5->shapeName();
    

?>