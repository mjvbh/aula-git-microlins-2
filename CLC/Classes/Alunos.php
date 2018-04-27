<?php

Class Alunos extends Pessoa{
    
    private $matricula;
    private $dataMatricula;
    private $grupo;
    
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }    
    
    public function getMatricula(){
        return $this->matricula;
    }
            
    public function setDataMatricula($dataMatriculoa){
        $this->dataMatricula = $dataMatriculoa;
    }    
    
    public function getDaraMatricula(){
        return $this->dataMatricula;
    }
    
    public function setGrupo($grupo){
        $this->grupo = $grupo;
    }    
    
    public function getGrupo(){
        return $this->grupo;
    }
    
     public function buscarAlunos(){
            return Alunos::all()->toArray();
        }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

