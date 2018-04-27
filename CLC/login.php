<?php
require "Usuarios.php";

$diretor = new Diretor;
$diretor->exibirAmbiente();

$usuario = isset($_POST["usuario"]);
if ($usuario == true) { //Pode ser simples sem if ($usuario == true) 
        
		$usuario = new Usuarios;
		$usuario->setNome($_POST["usuario"]);

		
	$senha = isset($_POST["senha"]);
    if ($senha){ // forma simples
	    $senha = $_POST["senha"];
		if ($senha == 1234) {
			$usuario->setSenha($senha);
            $usuario->cadastrar();
	    $usuario->
	    }
    }
}




