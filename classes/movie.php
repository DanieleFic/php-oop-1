<?php
    class Film{
        private $titolo;
        private $genere;
        private $datauscita;


        public function __construct($_titolo,$_genere,$_datauscita){
            $this->titolo = $_titolo;
            $this->genere = $_genere;
            $this->datauscita = $_datauscita;
        }

        public function getfilm(){
            return "{$this->titolo} {$this->genere} {$this->datauscita}";
        }
        
    }

    



    
    ?>