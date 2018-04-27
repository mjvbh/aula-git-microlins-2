<?php
Class Monitor {

	private $ambiente;
	
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
	
	public function setAmbiente($ambiente){
		//Tratar os dados da CI
		$this->ambiente = $ambiente;
	}
	
	public function cadastrar() {
	    //this
		//echo "O MonitorRDNE ".$nome." residente no endereço ".$senha." foi cadastrado com sucesso";	
		echo "O MonitorRDNE $this->nome residente no endereço $this->senha foi cadastrado com sucesso";
	}
	
		
}