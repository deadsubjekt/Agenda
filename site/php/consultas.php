<form action="" id="consulta-evento" name="consulta_form" method="get">
	<fieldset>
		<legend>Buscar eventos</legend>
		<label for="consulta-lista">Tipo de Consulta: </label>
		<select name="consulta_slc" id="consulta-lista" required>
			<option value="">- - -</option>
			<option value="nome" <?php if($_GET["consulta_slc"] == "nome"){ echo " selected";} ?>>Por nome do evento</option>
			<option value="inicial" <?php if($_GET["consulta_slc"] == "inicial"){ echo " selected";} ?>>Por inicial</option>
			<option value="data" <?php if($_GET["consulta_slc"] == "data"){ echo " selected";} ?> >Por data</option>
			<option value="estado" <?php if($_GET["consulta_slc"] == "estado"){ echo " selected";} ?>>Por estado</option>
			<option value="cidade" <?php if($_GET["consulta_slc"] == "cidade"){ echo " selected";} ?>>Por cidade</option>
			<option value="buscador" <?php if($_GET["consulta_slc"] == "buscador"){ echo " selected";} ?> >Busca geral</option>
			
		</select> 
		<?php
			switch($_GET["consulta_slc"])
			{
				case "nome":
					include("php/consulta-nome.php");
					break;
				case "inicial":
					include("php/consulta-inicial.php");
					break;
				case "data":
					include("php/consulta-data.php");
					break;
				case "estado":
					include("php/consulta-estado.php");
					break;
				case "cidade":
					include("php/consulta-cidade.php");
					break;
				case "buscador":
					include("php/consulta-buscador.php");
					break;
			} 
		?>
	</fieldset>
</form>
<script>
	window.onload = function()
	{
		var lista = document.getElementById("consulta-lista");

		lista.onchange = function()
		{
			window.location="?op=consultas&consulta_slc="+lista.value;
		};
	}
</script>