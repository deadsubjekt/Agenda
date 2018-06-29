<script>
	window.onload = function()
	{
		var lista = document.getElementById("evento-lista");
		lista.onchange = selecionarEvento;

		function selecionarEvento()
		{
			window.location="?op=config&evento_slc="+lista.value
		}
	}
</script>
<form id="config-evento" name="config_frm" action="php/editar-evento.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Editar Eventos</legend>
		<div>
			<label for="evento-lista">Evento: </label>
			<select id="evento-lista" class="cambio" name="evento_slc" required>
				<option value="">- - -</option>
				<?php include("select-nome.php"); ?>
			</select>
		</div>
		<?php 
			if($_GET["evento_slc"]!=null){
				$conexao2 = conectar();
				$evento = $_GET["evento_slc"];
				$consulta_evento = "select * from tb_eventos where nome='$evento'";
				//echo $consulta_evento;
				
				$executar_consulta_evento = $conexao2->query($consulta_evento);
				$registro_evento = $executar_consulta_evento->fetch_assoc();
				
				include("php/config-form.php");
				
				}
				
				include("php/mensagens.php");
		?>
		
	</fieldset>
</form>