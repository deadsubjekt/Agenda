<?php
$nome = $_POST["nome_slc"];
include("conexao.php");
$consulta="delete from tb_eventos where nome='$nome'";

$executar_consulta = $conexao->query($consulta);
if($executar_consulta)
	$mensagem = "O evento foi apagado com sucesso!";
else
	$mensagem = "Não foi possível deletar este evento!";

$conexao->close();
header("Location:../index.php?op=apagar&mensagem=$mensagem");

?>