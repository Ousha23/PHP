<?php
     spl_autoload_register(function($classe){
        require_once "Classes/".$classe.".class.php";
    });
?>