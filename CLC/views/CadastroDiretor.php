<?php

require_once '../BancoDadosGlobal.php';
require_once '../Classes/Pessoa.php';
require_once '../Classes/Funcionario.php';


$Funcionario = new Funcionario();


$variavel = 'valor x';

$formData = array(
    'nome' => $_POST['nome'],
    'endereco' => $_POST['endereco'],
    'funcao' => $_POST['endereco']
);

$nome = $_POST['nome'];
$erros = array();

if(empty($nome))
    {
    $erros = array('nome esta em branco');
    }

if(count($erros) > 0){ 
    foreach($erros as $erro) {
        print $erro .'<br>'; 
    }
}else{    
$Funcionario->insert($formData);
//$sql = "insert into funcionarios (nome, endereco, funcao) values ('".$nome."', enderec, fun ...)"
echo "Dados gravados com sucesso";
}
?>