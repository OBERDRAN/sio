<?php
    
	session_start();
	include "conexao.php";

	$bosim            = $_POST['BoSim'];
	$envolvido        = $_POST['Envolvido'];
	$mae              = $_POST['Mae'];
	$tpvitima         = $_POST['TipoVitima'];
	$idade            = $_POST['Idade'];
	$datanasc         = $_POST['DtNascimento'];
	$sexo             = $_POST['Sexo'];
	$local            = $_POST['LocalAcid'];
	$tipoveiculoacid  = $_POST['TipoDeVeicAcid'];
	$referencia       = $_POST['PonRefLocAcid'];
	$bairro           = $_POST['BairroAcid'];
	$datacidente      = $_POST['DtAcidente'];
	$horaacid		  = $_POST['HoraAcid'];
	$natuacid		  = $_POST['NaturezaAcid'];
	$dataobito        = $_POST['DtObito'];
	$observacidente	  = $_POST['ObservAcidente'];
	$prf              = $_POST['BoPrf'];
	$samu             = $_POST['BoSamu'];
	$smtt             = $_POST['BoSmtt'];
	$ueca             = $_POST['BoUeca'];
	$soc1             = $_POST['BoHmcm'];
	$soc2             = $_POST['BoHmd'];

	$sql = "
				INSERT INTO semus1 (BoSim,Envolvido,Mae,TipoVitima,Idade,DtNascimento,Sexo,LocalAcid,TipoDeVeicAcid,PonRefLocAcid,BairroAcid,DtAcidente,HoraAcid,NaturezaAcid,DtObito,ObservAcidente,BoPrf,BoSamu,BoSmtt,BoUeca,BoHmcm,BoHmd)
				VALUES ('$bosim','$envolvido','$mae','$tpvitima','$idade','$datanasc','$sexo','$local','$tipoveiculoacid','$referencia','$bairro','$datacidente','$horaacid','$natuacid','$dataobito','$observacidente','$prf', '$samu','$smtt','$ueca','$soc1','$soc2')
			";

 /*
    	if($result){
    	    
    	    $_SESSION['msg'] = "<p style='color: blue;'>Dados salvos com sucesso!</P";
		    header("Location: forms-basic.php");
    	   
    	}
    	else{
    	    
    	    $_SESSION['msg'] = "<p style='color: red;'>Erro!</P";
		    header("Location: forms-basic.php");
    	    die();
    	}

*/

/*
	$result = mysqli_query($conexao, $sql) or die("Erro");

*/
/*	

	if (($conexao)) {
		$_SESSION['msg'] = "<p style='color: blue;'>Dados salvos com sucesso!</P";
		header("Location: forms-basic.php");
	} else {
		$_SESSION['msg'] = "<p style='color: red;'>Erro!</P";
		header("Location: forms-basic.php");
	}
*/

	$result = mysqli_query($conexao, $sql);
	
	/*
	
	if($result){
		echo '<h2>Cadastro Efetuado Com sucesso!!</h2>';
		echo '<a href="https://siosemus.000webhostapp.com"><h3>Retornar para Página Inicial</h3></a>';
			
	}
	else{
		
		echo '<h2>Cadastro Não Efetuado Com sucesso!!</h2>';
		echo '<a href="https://siosemus.000webhostapp.com"><h3>Retornar para Página Inicial</h3></a>';	
		echo '<h3>Entrar em Contato com os desenvolvedores do Sistema</h3>';
		die("");
	}
	

*/	

    if($result){
		$_SESSION['msg'] = "Dados salvos com sucesso!";
		header("Location: forms-basic.php");
			
	}
	else{
	
	$_SESSION['msg'] = "Dados não salvos";
		header("Location: forms-basic.php");
		
	}
	
	
	
	

/*
	if(mysqli_insert_id($conexao)){
		
			echo '<h2>Cadastro Efetuado Com sucesso!!</h2>';
			echo '<a href="https://siosemus.000webhostapp.com">Página Inicial</a>';
			
        }else{
			echo '<h2>Cadastro Não Efetuado Com sucesso!!</h2>';
			echo '<a href="https://siosemus.000webhostapp.com">Página Inicial</a>';
        }
*/


?>