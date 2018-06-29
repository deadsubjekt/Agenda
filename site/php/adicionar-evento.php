<?php
/*dados form*/
$nome = $_POST["nome_txt"];
$data = $_POST["data_txt"];
$estado = $_POST["estado_slc"];
$cidade = $_POST["cidade_txt"];
$bairro = $_POST["bairro_txt"];
$rua = $_POST["rua_txt"];
$numero = $_POST["numero_txt"];

/*verificar se o evento está cadastrado*/
include("conexao.php");
$consulta = "select * from tb_eventos where nome = '$nome' and data= '$data'";
$executar_consulta = $conexao->query($consulta);

$num_regs= $executar_consulta->num_rows;
/*aviso de evento cadastrado*/
if($num_regs ==0){
	include("functions.php");
		$tipo = $_FILES["banner_fls"]["type"];
		$arquivo = $_FILES["banner_fls"]["tmp_name"];
		$se_subiu_arquivo = subir_banner($tipo, $arquivo, $nome);
		$banner= empty($arquivo)?$banner_padrao:$se_subiu_arquivo;
		$consulta="insert into tb_eventos (nome, data, estado, cidade, bairro, rua, numero, banner) values ('$nome','$data','$estado', '$cidade', '$bairro', '$rua', '$numero', '$banner')";

		$executar_consulta = $conexao->query(utf8_encode($consulta));
			if($executar_consulta)
				$mensagem= "O evento foi registrado.";
			else
				$mensagem= "Não foi possível registrar o evento.";
}			
else{
	$mensagem = "Este evento já está cadastrado!";
}

$conexao->close();
header("Location: ../index.php?op=add&mensagem=$mensagem");

?>