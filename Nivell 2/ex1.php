<?php
    class PokerDice{
        //atributs de classe
        // public $As;
        // public $K;
       
        // //CONSTRUCTOR
        // function __construct($As,$K){
        //     $this->As=$As;
        //     $this->K=$K;
        // }      
    
        //mètodes
        function thro(){
            $figura=rand(1,6);                    
        }

        function shapeName(){
            $figura=rand(1,6); 
            switch ($figura){
                case "1":
                    echo "A"."<br>";
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

        function getTotalThrows(){
            
        }
    }

    //creació d'objectes
        $dau1=new PokerDice();
        $dau1->thro();
        $dau1->shapeName();
        

        $dau2=new PokerDice();
        $dau2->thro();
        $dau2->shapeName();
        

        $dau3=new PokerDice();
        $dau3->thro();
        $dau3->shapeName();

        $dau4=new PokerDice();
        $dau4->thro();
        $dau4->shapeName();

        $dau5=new PokerDice();
        $dau5->thro();
        $dau5->shapeName();

        
    

?>