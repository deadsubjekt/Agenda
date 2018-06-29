		<br>
		<br>
		<div>
			<label for="nome">Nome do Evento: </label>
				<input type="text" id="nome" class="config" name="nome_txt" placeholder="Digite o nome do evento" title="Nome do Evento" value="<?php echo $registro_evento["nome"]; ?>" disabled required />
				<input type="hidden" name="nome_hdn" value="<?php echo $registro_evento["nome"]; ?>" />
			</div>
		</div>
		<br>
		<div>
			<label for="data">Data do evento: </label>
				 <input type="date" id="data" class="config" name="data_txt" value="<?php echo $registro_evento["data"];?>" required>
		</div>
		<br>
		<div>
			<label for="estado">Estado:</label>
				<select id="estado" class="config" name="estado_slc" required>
					<option value="">- - -</option>
					<?php include("select-estado.php"); ?>
				</select>
		</div>
		<br>
		<div>
			<label for="cidade">Cidade: </label>
				<input type="text" id="cidade" class="config" name="cidade_txt" placeholder="Digite a cidade do evento" title="Cidade do Evento" value="<?php echo $registro_evento["cidade"]; ?>" required />
		</div>
		<br>
		<div>
			<label for="bairro">Bairro:</label>
				<input type="text" id="bairro" class="config" name="bairro_txt" placeholder="Digite o bairro do evento" title="Bairro do Evento" value="<?php echo $registro_evento["bairro"]; ?>" required />
		</div>
		<br>
		<div>
			<label for="rua">Rua:</label>
				<input type="text" id="rua" class="config" name="rua_txt" placeholder="Digite a rua do evento" title="Rua do Evento" value="<?php echo $registro_evento["rua"]; ?>" required />
		</div>
		<br>
		<div>
			<label for="numero">Número:</label>
				<input type="number" id="numero" class="config" name="numero_txt" placeholder="Digite o número do local" title="Número do Local do Evento" value="<?php echo $registro_evento["numero"]; ?>" required />
		</div>
		<br>
		<div>
			<label for="banner">Banner: </label>
			<div class="add-arquivo config">
				<input type="file" id="baner" name="banner_fls" title="Insira o Banner do Evento"  />
				<input type="hidden" name="banner_hdn" value="<?php echo $registro_evento["banner"]; ?>" />
			</div>
			<div><img src="<?php echo "img/banner/".$registro_evento["banner"]; ?>" />
		</div>
		<br>
		<div>
			<input type="submit" id="enviar-add" class="config" name="enviar_btn" value="Editar" />
		</div>
			<?php include("php/mensagens.php"); ?>
