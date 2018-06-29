<br />
<div>
	<input type="hidden" name="op" value="consultas" />
	<label for="nome">Nome do Evento: </label>
	<input type="text" id="nome" class="config" name="nome_txt" placeholder="Digite o nome" title="Seu evento" 			 />
</div>
<input type="submit" id="enviar-buscar" class="config" name="enviar_btn" value="Buscar" />
<?php 
if($_GET["nome_txt"]!=null)
{
	$nome=$_GET["nome_txt"];
	$consulta = "select * from tb_eventos where nome like '%$nome%'";
	include("tabela-resultados.php");
}
?>