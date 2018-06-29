<?php
/*variaveis que serão usadas no formulário*/

$nome = $_POST["nome_hdn"];
$data = $_POST["data_txt"];
$estado = $_POST["estado_slc"];
$cidade = $_POST["cidade_txt"];
$bairro = $_POST["bairro_txt"];
$rua = $_POST["rua_txt"];
$numero = $_POST["numero_txt"];

/*Iniciar a conexão e a consulta*/
include("conexao.php");
$consulta = "SELECT * FROM tb_eventos WHERE nome='$nome'";
$executar_consulta = $conexao->query($consulta);

$num_regs = $executar_consulta->num_rows;

/*verificar se o evento já está cadastrado no banco*/
if($num_regs == 1){
	/*se a imagem vir vazia, insira uma nova foto selecionada*/
	if(empty($_FILES["banner_fls"] ["tmp_name"])){
		$banner = $_POST["banner_hdn"];
	} 
	else{
		//executar a funcao para subir a imagem
		include("functions.php");
		$tipo = $_FILES["banner_fls"] ["type"];
		$arquivo = $_FILES["banner_fls"]["tmp_name"];
		$banner = subir_banner($tipo, $arquivo, $nome);
	}
		
		//atualizar os dados no bd
	$consulta = "update tb_eventos set data='$data', estado='$estado', cidade='$cidade', bairro='$bairro', rua='$rua', numero='$numero', banner='$banner' where nome='$nome' ";
	
	
	$executar_consulta = $conexao->query(utf8_encode($consulta));
	
	if($executar_consulta)
		$mensagem = "O evento foi editado com sucesso!! <b>$nome</b>";
	else
		$mensagem = "Não foi possível editar o evento!! <b>$nome</b>";
	
} 
else{
	$mensagem = "A edição não será feita, ocorreram problemas";
}

$conexao->close();
//header("Location: ../index.php?op=config&mensagem=$mensagem");

echo ('<script>window.location="../index.php?op=config&mensagem='.$mensagem.'";</script>');
?>