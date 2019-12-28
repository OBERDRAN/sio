<?php
session_start();
include ("conexao.php");


    $id =  $_POST['id'];
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
	
$sql = "UPDATE semus1 SET BoSim='$bosim', Envolvido='$envolvido'   WHERE id = '$id' ";

/*BoSim='$bosim',Envolvido='$envolvido',TipoVitima='$tpvitima' ,Idade='$idade',Mae='$mae',

DtNascimento='$datanasc',Sexo='$sexo',LocalAcid='$local',TipoDeVeicAcid='$tipoveiculoacid',PonRefLocAcid='$referencia',BairroAcid='$bairro',DtAcidente='$datacidente',HoraAcid='$horaacid',NaturezaAcid='$natuacid',DtObito='$dataobito',ObservAcidente='$observacidente',BoPrf='$prf',BoSamu='$samu',BoSmtt='$smtt',BoUeca='$ueca',BoHmcm='$soc1',BoHmd='$soc2',modified=NOW() WHEREid='$id'";*/

$resultado_usuario = mysqli_query($conexao, $sql);

if($resultado_usuario){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: tables-data.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: tables-data.php?id=$id");
}



?>
	
	



