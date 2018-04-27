<?php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$arquivo = $_FILES['arquivo']; 
print "<pre>";
print_r($arquivo);

$nomearquivo = $arquivo['name'];

$retornoarquivo = move_uploaded_file($arquivo['tmp_name'],'arquivosupload/'.$nomearquivo);
if ($retornoarquivo === true){
    echo 'Arquivo enviado com sucesso!';
} else{
    echo 'Falha no envio do arquivo!';
    }
        

echo $nome ."</br>";
echo $endereco ."</br>";
echo $arquivo['name'];


