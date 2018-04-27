<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="inserirArquivo.php" method="POST" enctype="multipart/form-data"></br></br>
            Nome</br>
            <input type="text" name="nome"></br></br>
            Endereço</br>
            <input type="text" name="endereco"></br></br>
            Selecione um arquivo</br>
            <input type="file" name="arquivo"></br></br>
            <input type="submit" value="Enviar"></br></br>
            
            
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
