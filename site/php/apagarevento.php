<form id="apagar-evento" name="apagar_frm" action="php/apagar-evento.php" method="post" enctype="application/x-www-form-urlencoded">
	<fieldset>
		<legend>Deletando Eventos</legend>
		<br>
		<br>
		<div>
			<label for="nome">Nome do Evento: </label>
			<select id="nome" class="config" name="nome_slc" required>
				<option value="">- - -</option>
				<?php include("select-nome.php"); ?>
			</select>
		</div>
		<br>
		<div>
			<input type="submit" id="enviar-apagar" class="config" name="enviar_btn" value="Deletar" />
		</div>
		<?php include("php/mensagens.php"); ?>
	</fieldset>
</form>