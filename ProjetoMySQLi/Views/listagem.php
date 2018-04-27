<?php

//require_once 'conexao.php';
//require_once 'Classes/Consulta.php';

$consulta = new Consulta();
$listagemcontroller = new ListagemController();

?>

<html>
    <head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</head>

<body>
    <table class="table table-striped">
    <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Nome
            </th>
            <th>
                Sexo
            </th>
            <th>
                Ações
            </th>
        </tr>
    </thead>
    <tbody>
<?php
    $teste = $consulta->consultarRegistro();
    //print '<pre>';
    //print_r($teste);
    //die();
    //while ($linha = $consulta->consultarRegistro()){
    foreach ($consulta->consultarRegistro() as $linha){
    ?>
        <tr>
            <td>
                <?php  print $linha['id']; ?>
            </td>
            <td>
                <?php  print $linha['nome']; ?>
            </td>
            <td>
                <?php  print $linha['sexo']; ?>
            </td>
                <td>
                Editar - 
                <a href="<?php $boot ?>">Excluir </a>
            </td>
        </tr>
       
<?php } ?>
    </tbody>
</table>
</body> 

