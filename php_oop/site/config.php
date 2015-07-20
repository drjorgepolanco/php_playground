<?php

    function __autoload($class) {
        include "classes/" . $class . ".php";
    }

    $site = new Site();

    $site -> addHeader("header.php");
    $site -> addFooter("footer.php");

    $page = new Page();

?>