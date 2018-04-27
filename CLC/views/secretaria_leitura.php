<?php

require_once '../BancoDadosGlobal.php';
require_once '../Classes/Pessoa.php';
require_once '../Classes/Funcionario.php';
require_once '../Classes/Secretaria.php';


$secretaria = new Secretaria();

$dados_secretaria = $secretaria->retornar();


foreach ($dados_secretaria as $linha)
    {
     print $linha['nome'] .'<br>';
    }
