<?php
Class Usuarios {
	
	private $nome;
	private $senha;
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function setSenha($senha){
		$this->senha = $senha;
	}
	
	public function cadastrar() {
	    //this
		//echo "O Aluno ".$nome." residente no endereço ".$senha." foi cadastrado com sucesso";	
		echo "O Aluno $this->nome residente no endereço $this->senha foi cadastrado com sucesso";
	}
	
		
}