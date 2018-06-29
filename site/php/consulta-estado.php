<br />
<div>
	<input type="hidden" name="op" value="consultas" />
	<label for="estado">Estado: </label>
	<select id="estado" class="config" name="estado_slc" required>
		<option value="">- - -</option>
		<?php include("select-estado.php"); ?>
	</select>
</div>
<input type="submit" id="enviar-buscar" class="config" name="enviar_btn" value="buscar" />
<?php
if($_GET["estado_slc"]!=null)
{
    $estado=utf8_encode($_GET["estado_slc"]);
    $consulta = "select * from tb_eventos where estado = '$estado'";
    include("tabela-resultados.php");
}
?>