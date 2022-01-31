<?php

spl_autoload_register(function ($Class){

    //var_dump($Class);

    $dirName = 'class';



    if(file_exists("{$dirName}/{$Class}.class.php")){

        require("{$dirName}/{$Class}.class.php");

    } else {

        die("A Classe {$Class}.class.php não encontrada");

    }



});