<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->LoginModel->verificaLogado();
    }

    public function meusdados() {
        $this->db->select('id, nome, sexo, observacao');
        $this->db->from('pessoa');
        $this->db->where(array('id' => $this->session->userdata('id')));
        $dados = $this->db->get()->row();
        //print_r($dados);
        //die();

        $editar = array('editar' => $dados);
        $meusdados = $this->load->view('pessoa/meusdados', $editar, true);
        $this->load->view('login/estrutura', array('conteudo' => $meusdados));
    }

    public function cadastro() {

        $this->load->view('pessoa/formularioPessoa');
    }

    public function editarRegistro() {

        $this->load->model('PessoaModel');
        $this->PessoaModel->editarRegistro();

        print ('Seu regitro foi alterado com sucesso!!!');

        print '<a href="' . base_url('index.php/login/getpost') . '">Voltar</a>';
    }

    public function index() {
        $consulta = $this->db->get('pessoa');
        $arrconsulta = array('consulta' => $consulta);
        $this->load->view('pessoa/listagem', $arrconsulta);
    }

    public function excluir($parametro) {

        $this->load->model('PessoaModel');
        $this->PessoaModel->excluirRegistro($parametro);

        echo 'Excluido com sucesso';
        echo '<a href="' . base_url('index.php/pessoa/index') . '">Voltar</a>';
    }

    public function criarRegistro() {

        $this->load->model('PessoaModel');
        $this->PessoaModel->criarRegistro();
    }

}
