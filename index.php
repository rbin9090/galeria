<?php


//include 'configurations/conex.php';


include 'galeria.php';


$galeria = new galeria();





?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>galeria php</title>
	<style type="text/css">
		

		img{
			max-width: 190px;
		}
	</style>
</head>
<body>



<img src="<?php echo $galeria->PegaFotoAtual();?>">

<a href="<?php echo $galeria->ProximaImagem();?>">Proxima</a>
<br>
<a href="<?php echo $galeria->AnteriorImagem();?>">Anterior</a>



</body>
</html>