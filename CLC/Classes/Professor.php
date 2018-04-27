<?php
Class Professor {
	
	private $nome;
	private $senha;
	private $cpf;
	private $rg;
	
	public function setNome($nome){
		//para usar para lógicas de tratamento, validação etc...
		$this->nome = $nome;
	}
	 
	public function setSenha($senha){
		//Tratar os dados da senha
		$this->senha = $senha;
	}
	
	public function setCpf($cpf){
		//Tratar os dados da cpf
		$this->cpf = $cpf;
	}
	
	public function setRg($rg){
		//Tratar os dados da rg
		$this->rg = $rg;
	}
	
	public function cadastrar() {
	    //this
		//echo "O Professor ".$nome." residente no endereço ".$senha." foi cadastrado com sucesso";	
		echo "O Professor $this->nome residente no endereço $this->senha foi cadastrado com sucesso";
	}
	
		
}