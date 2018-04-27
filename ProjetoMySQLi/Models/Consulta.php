<?php

class Consulta extends mysqli{
    
    
    
            
    function __construct() {
        parent::__construct('localhost', 'root', '', 'auladb');
    
        if(empty($conectar->connect_error)){
            echo 'Conexão efetuada com sucesso!';
        }else{
            echo 'Erro de conexão com o banco de dados.';
        }
    }

    public function consultarRegistro(){
        
        $consulta = "SELECT id, nome, sexo FROM pessoa ORDER BY nome ASC";
        $retorno = $this->query($consulta);
        return $retorno->fetch_all(MYSQLI_ASSOC);
    }

    public function criarRegistro(){
        $criar = "SELECT id, nome, sexo FROM pessoa ORDER BY nome ASC";
    }
    
    public function atualizarRegistro(){
        $atualizar = "UPDATE id, nome, sexo FROM pessoa ORDER BY nome ASC";
    }
    
    public function apagarRegistro($id){
        
        $apagar = "DELETE FROM pessoa WHERE id = '$id'";
    }
        
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

