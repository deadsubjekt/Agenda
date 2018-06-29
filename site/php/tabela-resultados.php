<?php
if(empty($_GET["estado_slc"]))
{
	include("conexao.php");
}
include("functions.php");
$executar_consulta = $conexao->query($consulta);
$num_regs = $executar_consulta->num_rows;

if($num_regs==0)
{
	echo "<br /><br /><span class='mensagens'>Não existe registros nesta busca!!</span><br /><br />";
}
else
{
?>
	<br /><br />
	<table>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Data</th>
				<th>Estado</th>
				<th>Cidade</th>
				<th>Bairro</th>
				<th>Rua</th>
				<th>Número</th>
				<th>Banner</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while($registro = $executar_consulta->fetch_assoc())
			{
			?>
				<tr>
					<td><?php echo utf8_decode($registro["nome"]); ?></td>
					<td><?php echo utf8_decode($registro["data"]); ?></td>
					<td><?php echo utf8_decode($registro["estado"]); ?></td>
					<td><?php echo utf8_decode($registro["cidade"]); ?></td>
					<td><?php echo utf8_decode($registro["bairro"]); ?></td>
					<td><?php echo utf8_decode($registro["rua"]); ?></td>
					<td><?php echo utf8_decode($registro["numero"]); ?></td>
					<td><img src="img/banner/<?php echo utf8_decode($registro["banner"]); ?>" /></td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
<?php
}
$conexao->close();
?>