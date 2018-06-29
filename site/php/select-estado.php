<?php

if(!$registro_evento["estado"]){
include("conexao.php");
}

$consulta= "select * from estado order by estado";
$executar_consulta = $conexao->query($consulta);

while($registro = $executar_consulta->fetch_assoc()){

	$nome_estado=utf8_encode($registro["estado"]);
	echo "<option value='$nome_estado'";
	if($nome_estado==utf8_decode($registro_evento["estado"]))
	{
		echo " selected";
	}
	echo">$nome_estado</option>";
}

?>