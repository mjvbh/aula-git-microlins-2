<?php

Class Funcionario extends Pessoa{

        private $funcao;
        private $ambiente="REMOTO";
        private $status;
	
        
        public function setFuncao($funcao){
	    //
	    $this->funcao = $funcao;
	}
        
        public function getFuncao(){
            return $this->funcao;
        }
        
        public function setAmbiente($ambiente){
	    //
	    $this->ambiente = $ambiente;
	}
        
        protected function getAmbiente(){
            return $this->ambiente;
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
        
        public function buscarFuncionarios(){
           // $where = array('funcao'=> $this->funcao); 
            return Funcionario::all();
        }
}