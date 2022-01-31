<?php

class Pagamentos extends Aluno{
    public $pagamento;
    

    function __construct($nome,$matricula,$pagamento)
    {
        parent::__construct($nome,$matricula);
        $this->pagamento = $pagamento;
        
    }

    function exibirPagamentos(){
        return "<p>Pagamento<br> 
        Nome: {$this->nome}<br>
        Matricula: {$this->matricula}.<br>
        pagamento: {$this->pagamento}.<br>        
        </p>";
    }
}