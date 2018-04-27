<?php

class PessoaModel extends CI_Model{
    
    public function lerRegistro($id){
        
        $query = $this->db->get_where('pessoa', array('id' => $id));
        return $query;
        
    }

    public function editarRegistro(){
        $dados=array('nome'=>$this->input->post('nome'),
                     'sexo'=>$this->input->post('sexo'),
                     'observacao'=>$this->input->post('observacao'));
        $where=array('id'=>$this->input->post('id'));
        $this->db->update('pessoa', $dados, $where);
        
    }

    public function criarRegistro(){
        
        $dados= array('nome'=>$this->input->post('nome'),
                      'sexo'=>$this->input->post('sexo'),
                      'observacao'=>$this->input->post('observacao'));
        $this->db->insert('pessoa',$dados);
        
        echo 'Inserido com sucesso';
        echo '<a href="'.base_url('index.php/pessoa/index').'">Voltar</a>';
        
    }

    public function excluirRegistro($parametro){
        
        $this->db->delete('pessoa',array('id' => $parametro));
        
    }


    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

