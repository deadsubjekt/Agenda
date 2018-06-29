<br />
<div>
	<input type="hidden" name="op" value="consultas" />
	<label for="cidade">Cidade: </label>
	<input type="text" id="cidade" class="config" name="cidade_txt" placeholder="Digite o nome da cidade" title="Nome da cidade" 			 />
</div>
<input type="submit" id="enviar-buscar" class="config" name="enviar_btn" value="Buscar" />
<?php 
if($_GET["cidade_txt"]!=null)
{
	$cidade=$_GET["cidade_txt"];
	$consulta = "select * from tb_eventos where cidade like '%$cidade%'";
	include("tabela-resultados.php");
}
?>