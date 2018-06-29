<?php 
error_reporting(E_ALL ^ E_NOTICE);
$op = $_GET["op"];
switch($op){
	case "add":
		$conteudo = "php/addevento.php" ;
		$titulo = "Adicionar Evento" ;
		break;

	case "apagar":
		$conteudo = "php/apagarevento.php" ;
		$titulo = "Apagar Evento" ;
		break;

	case "config":
		$conteudo = "php/config.php" ;
		$titulo = "Configurações" ;
		break;

	case "consultas":
		$conteudo = "php/consultas.php" ;
		$titulo = "Consultar Eventos" ;
		break;

	default:
		$conteudo = "php/home.php";
		$titulo = "Agenda de Eventos";
		break;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
	<title><?php echo $titulo; ?></title>

<link rel="stylesheet" href="css/meu-evento.css">
<link rel="stylesheet" href="css/jquery-ui.css" />
<link rel="shortcut icon" type="image/x-icon" href="img/event.png" />

<script src="js/jquery.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/traducao.js"></script>
<script src="js/meu-evento.js"> </script>


</head>

<body>
	<section id="conteudo">
		<nav>
			<ul>
				<a class="config" href="index.php"><li> Home</li></a>
				<a class="config" href="?op=add"><li> Adicionar Evento </li></a>
				<a class="config" href="?op=apagar"><li> Apagar Evento </li></a>
				<a class="config" href="?op=config"><li> Configurações </li></a>
				<a class="config" href="?op=consultas"><li> Consultar Eventos </li></a>
			</ul>
		</nav>
			<section id="principal">
				<?php include ($conteudo); ?>
			</section>
	</section>
</body>
</html>