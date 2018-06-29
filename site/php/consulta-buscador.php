<br />
<div>
	<input type="hidden" name="op" value="consultas" />
	<label for="buscador">Buscar: </label>
	<input type="search" id="buscador" class="config" name="q" placeholder="Digite sua busca" title="Sua Busca" />
</div>
<input type="submit" id="enviar-buscar" class="config" name="enviar_btn" value="Buscar" />
<?php 
if($_GET["q"]!=null)
{
	$q=$_GET["q"];
	$consulta = "select * from tb_eventos where match( nome, data, estado, cidade) against('$q' in boolean mode)";
	include("tabela-resultados.php");
}
?>