
<form name="f_excluir" method="post" action="deletar.php">

<table border ="1">
<tr>
<td>codigo</td><td>nome</td><td>selecionar</td>
</tr>

<?php 
include "conexao.php";
if (isset($_POST['sel'])){

foreach($_POST['sel'] as $cod){
	$query= "DELETE  FROM acessosemus WHERE id= $cod ";
	$res= mysqli_query($conexao,$query); 
}

}else{
	echo"form não subimetido";


}
 
$query = "SELECT * FROM acessosemus order by id";
$res = mysqli_query($conexao,$query);

while($vreg=mysqli_fetch_row($res)){
	$vcod=$vreg[0];
	$vnome=$vreg[1];
	
	echo"<tr>";
	echo"<td>$vcod</td><td>$vnome</td>";
	echo"<td align=center><input type=checkbox value=$vcod name=sel[]></td>";
	echo "</tr>";
	}
	
	
	mysqli_close($conexao);




?>







</table>

<br/>

<input type="submit" value="excluir" name="bt_excluir" />
</form>
