<?php

class Login extends CI_Controller {

    
    public function index() {

        $this->load->view('login/login');
    }

    public function getPost() {
        //verifica se ja esta logado
    $sessao=$this->session->userdata('id');
    
    //var_dump($sessao);
    //die;
    //se nao estiver logado, então faz a consulta de login
    if(empty($sessao)){
        $usuario = $this->input->post('usuario');
        $senha = md5($this->input->post('senha'));

        $this->load->model('LoginModel');
        $login = $this->LoginModel->validaLogin($usuario, $senha);
        //var_dump($login); die();
                
        if ($login !== NULL && ($login->usuario !== "" && $login->senha !== "")) {

            //echo'Você está logado';
            $data = array('id'=> $login->id,
                          'nome'=> $login->nome
                );
            $this->session->set_userdata($data);
            $dados = array('conteudo'=>'Acesse o menu meus dados para conferir suas informações');
            $this->load->view('login/estrutura', $dados);
        } else {
//                echo 'Você não está logado';
                redirect('login/index');
        }
    }else{        
        $dados = array('conteudo'=>'Acesse o menu meus dados para conferir suas informações');
        $this->load->view('login/estrutura', $dados);
      
    }
//        print '<pre>';
//        var_dump($login->result_array());
//        die;
    }
    
    public function sair(){
        $this->LoginModel->sair();
    }
    

}
