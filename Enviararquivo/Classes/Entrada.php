<?php

require_once 'Construtor.php';

class Entrada extends Construtor{
    public $nome;
    public $idade;
    
    function __construct() {
        parent::__construct();
        print 'entrada';
    }
    
    public function inserirDados(){
        
    }
}


$entrada = new Entrada();
Construtor::Estatico();

print Construtor::mensagem;

