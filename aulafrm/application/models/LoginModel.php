<?php

class LoginModel extends CI_Model {

    public function validaLogin($usario, $senha) {
        $dadosformulario = array('usuario' => $usario, 'senha' => $senha);
        return $this->db->get_where('pessoa', $dadosformulario)->row();
    }

    public function verificaLogado(){
        $sessaoId = $this->session->userdata('id');
        if(empty($sessaoId)){
            redirect('login/index');
        }       
    }
    
    public function sair(){
        $this->session->sess_destroy();
        redirect('login/index');
    }
}
