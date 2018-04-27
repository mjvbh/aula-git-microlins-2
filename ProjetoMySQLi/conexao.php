<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$conectar = new mysqli('localhost', 'root', '', 'auladb');
//$conectar->
if(empty($conectar->connect_error)){
    //echo 'Conexão efetuada com sucesso!';
}else{
    //echo 'Erro de conexão com o banco de dados.';
}

$consulta = "SELECT id, nome, sexo FROM pessoa ORDER BY nome ASC";

$resposta = $conectar->query($consulta);


