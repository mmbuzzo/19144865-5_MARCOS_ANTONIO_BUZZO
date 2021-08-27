<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>MAPA Back End 1</title>
	 <link rel="icon" type="imagem/png" href="images/logo2.JPG" />
	<link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
</head>
<body>
	<div id="header">
		<div id="logo">
			<a href="?pg=1" ><img src="images/logo2.JPG"></a>
		</div>
	</div>
	<div id="menu">
		<nav>
         <ul>
           <li><a href="index.php?pg=1">Index</a></li>
           <li><a href="index.php?pg=2">Quem somos</a></li>           
           <li><a href="index.php?pg=3">Contato</a></li>
           <li><a href="index.php?pg=4">localização</a></li>
          </ul>
        </nav>
	</div>

	<div id="main">
		<div class="article">
			<h1> 
				<?php
					include_once('function/controlar.php'); 
					@$valor = $_GET['pg'];
					controlarAcesso($valor);

				 ?>
				 
			</h1>
		</div>
		</div>
	<div id="sidebar">
		
	</div>
<br>
	<div id="footer">
		<p>
			Aluno: MARCOS ANTONIO BUZZO<br>
			RA: 19144865-5<br>
			CURSO: SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET<br>
			UNIVERSIDADE CESUMAR - UNICESUMAR
		</p>
	</div>
			
	
</body>
</html>