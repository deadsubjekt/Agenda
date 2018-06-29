<?php
/*arquivo de conexao com bd*/
include("conexao.php");
/*consulta para buscar nomes no banco*/
$consulta = "select nome from tb_eventos order by nome";
/*Executar query*/
$executar_consulta = $conexao->query($consulta);
/*percorrer os recursos gerados na consuta anterior*/

while($registro = $executar_consulta->fetch_assoc())
{
	
	echo "<option value='".utf8_encode($registro["nome"])."'";
	if($_GET["evento_slc"]==$registro["nome"])
	{
		echo " selected";	
	}
	echo ">".utf8_encode($registro["nome"])."</option>";
}
/*$conexao->close();*/
?>