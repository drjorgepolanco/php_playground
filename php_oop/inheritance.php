<?php 
    
    class Baddie {
        public $evilness = 10;

        public function increaseEvilness() {
            ++$this -> evilness;
        }

        public function __destruct() {
            echo "You beat the Baddie!";
        }
    }

    class Boss extends Baddie {
        public $evilness = 50;

        public function __destruct() {
            parent::__destruct();
            
            echo "You beat the Boss!";
        }
    }

    $ganon = new Boss();

    unset($ganon);
?>