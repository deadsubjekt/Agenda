<br /><br/>
<?php 
/*Array do abcdário*/
$letra = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');


//for para percorrer todo abcdário
for($i=0; $i<count($letra);$i++)
{
	if($letra[$i]=="Z")
	{
		echo "<a class='config' href='?op=consultas&consulta_slc=inicial&letra=".$letra[$i]."'>".$letra[$i]."</a>";
	}
	else
	{
		echo "<a class='config' href='?op=consultas&consulta_slc=inicial&letra=".$letra[$i]."'>".$letra[$i]."</a>\n-\n";
	}
}

if($_GET["letra"]!=null)
{
	$inicial = $_GET["letra"];
	$consulta = "select * from tb_eventos where nome like '$inicial%';";
	include("tabela-resultados.php");
}
?>