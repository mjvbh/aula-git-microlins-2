<?php

Class Construtor{
    
    const mensagem = 'minha constante';
    
    function __construct() {
        //$this->verificaIdade($idade);
        print 'construtor';
    }
    
    private function verificaIdade($idade){
        
        if($idade >= 18){
            $this->mensagem = "Você pode entrar";
            print $this->mensagem;
        } else {
            $this->mensagem = "Você não pode entrar";
            print $this->mensagem;
        }
    }
    
    public function imprimeMensagem(){
        print $this->mensagem;
    }
    
    static public function Estatico(){
        print 'Estático';
    } 
} 