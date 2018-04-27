<?php

require_once 'conexao.php';
require_once 'Models/Consulta.php';
require_once 'Controllers/ListagemController.php'; 
//require_once 'Views/listagem.php';

$nomeController='Listagem';
$action='index';
$boot = new $nomeController.'Controller'
$boot->$action.'Action()';

      







/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

