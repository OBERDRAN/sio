<?php


    session_start();	
	
	include_once("conexao.php");	
	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['login'])) && (isset($_POST['senha']))){
		$usuario1 = mysqli_real_escape_string($conexao, $_POST['login']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
		
			
		//Buscar na tabela acessosemus o usuário que foi cadastrado
		$result_usuario = "SELECT * FROM acessosemus WHERE login = '$usuario1' && senha = '$senha'";
		$resultado_usuario = mysqli_query($conexao, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrando um usuario na tabela acessosemus
		if(isset($resultado)){
		
			$_SESSION['login'] = $resultado['login'];		
			$_SESSION['id'] = $resultado['id'];	
		
			header("Location: page-inicial.php");
			die();
			
		}else{	
			
			$_SESSION['loginErro'] = "Usuário ou senha Inválido!";
			header("Location: index.php");
			
        }
    }

?>