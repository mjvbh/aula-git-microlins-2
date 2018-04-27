<?php
require '../BancoDadosGlobal.php';
require 'Pessoa.php';
//require "Diretor2.php";
//require "Monitor2.php";
//require "Secretaria2.php";
require 'Funcionario.php';
        
    $funcionario = new Funcionario;
    $todosFuncionarios = $funcionario->buscarFuncionarios();
    $qtdFuncionarios = count($todosFuncionarios);
    
    for($i = 0; $i < $qtdFuncionarios; $i++){
        echo $todosFuncionarios[$i]['nome']." ";
        echo $todosFuncionarios[$i]['endereco']."<br>";
    }
    echo '<br>--------------------------- <br>';
    foreach ($todosFuncionarios as $key =>$funcionario){
        foreach ($funcionario as $key2 =>$atributos){
            echo $key2;
        }
        
        
    }
    print'<pre>';
    print_r($todosFuncionarios);
    die; 

    $diretor2 = new Diretor2;
    $diretor2->setNome("José");
    //print_r($diretor2); (debugando o código para encontrar erro)
    //die; (debugando o código para encontrar erro)
    $diretor2->exibirNome();    

    $monitor2 = new Monitor2;
    $monitor2->setNome("Maria");
    $monitor2->exibirNome();
    
    $secretaria2 = new Secretaria2;
    $secretaria2->setNome("João");
    $secretaria2->exibirNome();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

