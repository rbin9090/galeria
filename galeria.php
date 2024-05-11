<?php


class Galeria
{

private $imagens =  array('img1.jpeg','img2.jpg','img3.jpg','ok.jpg');


public  function PegaFotoAtual()
{

	$atual = isset($_GET['imagem']) ? (int)$_GET['imagem'] : '0';

	if($atual < 0)
		$atual = 0;
		if ($atual >= count($this->imagens)) 
			$atual = count($this->imagens) - 1;

		return $this->imagens[$atual];
	
	}


	public function ProximaImagem()
	{
		$atual = isset($_GET['imagem']) ? (int)$_GET['imagem'] : '0';
		$atual++;
		if ($atual >= count($this->imagens)) {
			$atual = count($this->imagens) - 1;

		}

		return '?imagem='.$atual;
	}


	public function AnteriorImagem()
	{
		$atual = isset($_GET['imagem']) ? (int)$_GET['imagem'] : '0';
		$atual--;
		if ($atual < 0) {
			$atual = 0;

		}

		return '?imagem='.$atual;
	}


}















?>