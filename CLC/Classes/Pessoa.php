<?php

Class Pessoa extends BancoDadosGlobal{

        private $nome;
	private $senha;
	private $endereco;
	private $cpf;
	private $rg;
        private $status;
	
	public function setNome($nome){
	    //para usar para lógicas de tratamento, validação etc...
	    $this->nome = $nome;
	}
        
        public function getNome(){
            return $this->nome;
        }

	public function setSenha($senha){
	    //para tratemnto da senha
	    $this->senha = $senha;
	}
        
        public function getSenha(){
            return $this->senha;
        }
	
	public function setEndereco($endereco){
	    //
	    $this->endereco = $endereco;
	}
        
        public function getEndereco(){
            return $this->endereco;
        }
	
	public function setCpf($cpf){
	    //
	    $this->cpf = $cpf;
	}
        
        public function getCpf(){
            return $this->cpf;
        }
	
	public function setRg($rg){
	    //
	    $this->rg = $rg;
	}
        
        public function getRg(){
            return $this->rg;
        }

        public function setStatus($status){
	    //para usar para lógicas de tratamento, validação etc...
	    $this->status = $status;
	}
        
        public function getStatus(){
            return $this->status;
        }
        
        public function cadastrar() {
	    //this
	    //echo "O ".$funcao.", ".$nome.", residente no endereço ".$senha." foi cadastrado com sucesso";	
	    echo "O $this->funcao $this->nome residente no endereço $this->senha foi cadastrado com sucesso";
	}
        
        public function excluirGlobal(){
	    //para excluir o objeto da ID instanciada 
	    $this->excluir($this->id);
        }
        
     
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

