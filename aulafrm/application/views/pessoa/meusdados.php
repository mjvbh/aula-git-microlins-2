<html>
    <head>
        <title>
            <h1>Editar Dados</h1>
        </title>
    </head>
    <body>
        <br><br>
        <form action="<?php echo base_url('index.php/pessoa/editarRegistro')?>" method="post">
            <input type="hidden" name="id" value="<?php echo $editar->id?>"><br><br>
            Nome<br>
            <input type="text" name="nome" value="<?php echo $editar->nome?>"><br><br>
            Sexo<br>
            <select name="sexo">
            <option value="">--</option>
            <option value="m" <?php ($editar->sexo=="m" ? print 'selected' : '') ?>>M</option>
            <option value="f" <?php ($editar->sexo=="f" ? print 'selected' : '') ?>>F</option>
            </select>
            <br><br>
            Descrição<br>
            <textarea name="observacao"><?php echo $editar->observacao?></textarea><br><br>
            <input type="submit" value="Salvar">
        
    </body>
    
</html>