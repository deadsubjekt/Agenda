<br />
<div>
	<input type="hidden" name="op" value="consultas" />
	<label for="data">Data do Evento: </label>
	<input type="date" id="data" class="config" name="data_txt" placeholder="Digite a data" title="Data do evento" 			 />
</div>
<input type="submit" id="enviar-buscar" class="config" name="enviar_btn" value="Buscar" />
<?php 
if($_GET["data_txt"]!=null)
{
	$data=$_GET["data_txt"];
	$consulta = "select * from tb_eventos where data like '%$data%'";
	include("tabela-resultados.php");
}
?>