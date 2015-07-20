<?php

    class Site {
        private $header;
        private $footer;

        public function addHeader($header) {
            $this -> header = $header;
        }

        public function addFooter($footer) {
            $this -> footer = $footer;
        }

        public function display($content, $title) {

            // bring the object Page to this method
            // the scope of $page is added to this particular method
            global $page;

            include $this -> header;

                $page -> display($content);

            include $this -> footer;
        }
    }

?>