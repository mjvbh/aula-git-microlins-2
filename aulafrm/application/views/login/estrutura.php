<?php

print "Bem vindo Sr(a) " . $this->session->userdata('nome');

?>
<html>
    <head>
        <title>Meu sistema</title>
        
    </head>
    <body>
        <ul>
            <li><a href="<?php echo base_url ('index.php/pessoa/meusdados') ?>"> Meus Dados </a>
            </li>
            <li><a href="<?php echo base_url ('index.php/login/sair') ?>"> Sair </a>
            </li>
        </ul>    
     <div><?php echo $conteudo;?></div>
        
    </body>
    
    
</html>

