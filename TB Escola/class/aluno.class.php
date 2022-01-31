<?php

class Aluno {
    public $nome;
    public $matricula;

    function __construct($nome,$matricula)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    function verMatricula(){
        echo $this->nome;
        echo $this->matricula;
    }
}