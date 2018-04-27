<html>
    <head>
        <title>
            <h1>Cadastro de Aluno</h1>
        </title>
    </head>
    <body>
        <br><br>
        <form action="<?php echo base_url('index.php/pessoa/criarRegistro')?>" method="post">
            Nome<br>
            <input type="text" name="nome"><br><br>
            Sexo<br>
            <select name="sexo">
            <option value="">--</option>
            <option value="m">Masculino</option>
            <option value="f">Feminino</option>
            </select>
            <br><br>
            Descrição<br>
            <textarea name="observacao"></textarea><br><br>
            <input type="submit" value="Salvar">
        
    </body>
    
</html>