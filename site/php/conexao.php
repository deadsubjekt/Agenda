<?php
function conectar(){
	$servidor="localhost";
	$usuario="root";
	$senha="";
	$bd="bd_eventos";

	$con=new mysqli($servidor, $usuario, $senha, $bd);
	return $con;
}

$conexao=conectar();

?>