<?php
	echo "Hello World! <br>";

    echo "<br>";

	class Baddie {

        public $evilness = 10;
        public $name;

        public function __construct($name, $evilness) {
            echo "<br>";
            echo "A new " . __CLASS__ . " has been created! <br>";
            $this -> name = $name;
            $this -> evilness = $evilness;
            echo "<br>";
            var_dump($this);
            echo "<br>";
        }

        public function __destruct() {
            echo "<br>";
            echo "A " . __CLASS__ . " named " . $this -> name . ", has beed killed!";
        }

        public function __toString() {
            echo $this -> name;
        }

        public function greet() {
            return "Hello " . $this -> name;
        }

        public function makeMoreEvil() {
            ++$this -> evilness;
            return $this -> evilness;
        }

        public function makeEvil50() {
            $this -> evilness = 50;
            return $this -> evilness;
        }

	}

    $jorge = new Baddie("Jorge", 6);
    $triculito = new Baddie("Triculito", 11);


    

    echo "<br><br>";
    echo $jorge -> evilness;

    echo "<br><br>";
    echo $jorge -> name;

    echo "<br><br>";
    echo $jorge -> greet();

    echo "<br><br>";
    echo $jorge -> makeMoreEvil();
    echo $jorge -> makeMoreEvil();

    echo "<br><br>";
    echo $jorge -> evilness;

    echo "<br><br>";
    echo $triculito -> name;
    echo "<br>";
    echo $triculito -> evilness;
    echo "<br>";
    echo $triculito -> makeEvil50();
    echo "<br>";
    echo $triculito -> makeMoreEvil();
    echo "<br><br>";
    echo $jorge;

?>
