<?php
include("conexao.php");
$consulta="select * from cidade order by cidade";
$executar_consulta=$conexao->query($consulta)

while($registro = $executar_consulta->fetch_assoc()){
	$nome_cidade = utf8_encode($registro["cidade"]);	
	echo "<option value='$nome_cidade'>$nome_cidade</option>";

	
}
?>