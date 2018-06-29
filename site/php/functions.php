<?php

function apagar_banner($caminho, $extensao){
	switch($extensao){
		case ".jpg":
		if(file_exists($caminho."png"))
			unlink($caminho.".png");
		if(file_exists($caminho."gif"))
			unlink($caminho.".gif");
		break;
		
	case ".gif":
		if(file_exists($caminho."png"))
			unlink($caminho.".png");
		if(file_exists($caminho."jpg"))
			unlink($caminho.".jpg");
		break;
		
	case ".png":
		if(file_exists($caminho."jpg"))
			unlink($caminho.".jpg");
		if(file_exists($caminho."gif"))
			unlink($caminho.".gif");
		break;
	}
}

// Função para subir a imagem do banner
function subir_banner($tipo, $banner, $nome){
	
	//verificar se realmente é imagem que o usuário está subindo
	if(strstr($tipo, "image")){
		if(strstr($tipo, "jpeg"))
			$extensao = ".jpg";
		else if(strstr($tipo, "gif"))
			$extensao = ".gif";
		else if(strstr($tipo, "png"))
			$extensao = ".png";
		
		//verificacao do tamanho correto da imagem 420 px
		$tam_banner = getimagesize($banner);
		$largura_banner = $tam_banner[0];
		$altura_banner = $tam_banner[1];
		$largura_banner_desejada = 180;
		
		//se o tamanho da imagem for maior, então ajuste
		if($largura_banner > $largura_banner_desejada){
			$nova_largura_banner = $largura_banner_desejada;
			$nova_altura_banner = ($altura_banner/$largura_banner)*$nova_largura_banner;
			
			$banner_reajustado = imagecreatetruecolor($nova_largura_banner, $nova_altura_banner);
			
			//criar imagem baseada na imagem original e inserir dentro da área img reajustada criada
			
			switch($extensao){
				case ".jpg":
				$banner_original = imagecreatefromjpeg($banner);
				//reajustar a imagem com os novos tamanhos
				imagecopyresampled($banner_reajustado, $banner_original, 0, 0,0, 0, $nova_largura_banner, $nova_altura_banner, $largura_banner, $altura_banner);
				
				//salvar a imagem modificada no servidor
				$nome_banner_ext = "../img/banner/".$nome.$extensao;
				$nome_banner = "../img/banner/".$nome;
				imagejpeg($banner_reajustado, $nome_banner_ext, 100);
				
				//funcao para apagar imagens duplicadas

				apagar_banner($nome_banner, ".jpg");
				break;
				
			case ".gif":
				$banner_original = imagecreatefromgif($banner);
				//reajustar a imagem com os novos tamanhos
				imagecopyresampled($banner_reajustado, $banner_original, 0, 0,0, 0, $nova_largura_banner, $nova_altura_banner, $largura_banner, $altura_banner);
				
				//salvar a imagem modificada no servidor
				$nome_banner_ext = "../img/banner/".$nome.$extensao;
				$nome_banner = "../img/banner/".$nomeEvento;
				imagegif($banner_reajustado, $nome_banner_ext, 100);
				
				//funcao para apagar imagens duplicadas

				apagar_banner($nome_banner, ".gif");
				break;
				
			case ".png":
				$banner_original = imagecreatefrompng($banner);
				//reajustar a imagem com os novos tamanhos
				imagecopyresampled($banner_reajustado, $banner_original, 0, 0,0, 0, $nova_largura_banner, $nova_altura_banner, $largura_banner, $altura_banner);

				//salvar a imagem modificada no servidor
				$nome_banner_ext = "../img/banner/".$nome.$extensao;
				$nome_banner = "../img/banner/".$nome;
				imagepng($banner_reajustado, $nome_banner_ext);
				//funcao para apagar imagens duplicadas
				apagar_banner($nome_banner, ".png");
				break;
			}
			
		}else{
			//inserir o caminho onde será guardada a img
			$destino = "../img/banner/".$nome.$extensao;
			//subir a imagem
			move_uploaded_file($banner, $destino) or die("Não foi possível subir a imagem");
			//funcao para apagar imagens duplicadas
			$nome_banner = "../img/banner/".$nome;
			apagar_banner($nome_banner, $extensao);
		}
		//O nome da imagem será o nome . extensão da img
		$banner = $nome.$extensao;
		return $banner;
	}else{
		return false;
	}
}

?>