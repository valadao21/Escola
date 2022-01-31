<?php

class Turma extends Aluno{
    public $sala;
    public $professor;

    //public $nomefantasia;

    function __construct($nome,$matricula,$sala,$professor)
    {
        parent::__construct($nome,$matricula);
        $this->sala = $sala;
        $this->professor = $professor;
        
    }

    function exibirTurma(){
        return "<p>Turma<br> 
        Nome: {$this->nome}.<br>
        Matricula: {$this->matricula}.<br>
        Sala: {$this->sala}.<br>
        Professor: {$this->professor}.<br>  
        </p>";
    }
}