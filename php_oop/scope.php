<?php
    
    class Baddie {
        // private but available also within Sub-Classes (Boss)
        protected $evilness = 10;

        // private and not available within subclasses. Only inside this Class
        private $crazyness = 23;

        public function getEvilness() {
            return $this -> evilness;
        }

        public function getCrazyness() {
            return $this -> crazyness;
        }
    }

    class Boss extends Baddie {
        public function getBaddieEvilness() {
            return $this -> evilness;
        }

        public function getBaddieCrazyness() {
            echo "You can't access this property!";
            return $this -> crazyness;
        } 
    }

    $jorge = new Boss();
    $jorge -> getBaddieCrazyness();
    echo "<br>";
    echo "<br>";
    echo $jorge -> getBaddieEvilness();
?>
