<?php
    class PokerDice{
        //atributs de classe
        public $As;
        public $K;
        public $Q;
        public $J;
        public $vuit;
        public $set;

       
        //CONSTRUCTOR
        function __construct($As,$K,$Q,$J,$vuit,$set){
            $this->As=$As;
            $this->K=$K;
            $this->Q=$Q;
            $this->J=$J;
            $this->vui=$vuit;
            $this->set=$set;
        }      
    
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

        function getTotalThrows(){ //pendent
            
        }
    }

    //creació d'objectes
        $dau1=new PokerDice('As','K','Q','J','8','7');
        $dau1->thro();
        $dau1->shapeName();
        
        

        $dau2=new PokerDice('As','K','Q','J','8','7');
        $dau2->thro();
        $dau2->shapeName();
        

        $dau3=new PokerDice('As','K','Q','J','8','7');
        $dau3->thro();
        $dau3->shapeName();

        $dau4=new PokerDice('As','K','Q','J','8','7');
        $dau4->thro();
        $dau4->shapeName();

        $dau5=new PokerDice('As','K','Q','J','8','7');
        $dau5->thro();
        $dau5->shapeName();

        
    

?>