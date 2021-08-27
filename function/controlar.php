<?php 
	function controlarAcesso($valor){
		//@$valor = $_GET['pg'];

		if($valor == 1){
			require 'pages/produtos.php';
		}
		else if($valor == 2){
			include('pages/quemsomo.php');
		}
		else if($valor == 3){
			include('pages/contato.php');
		}
		else if($valor == 4){
			include('pages/localizacao.php');
		}
		else if($valor == 5){
			include('pages/informacaoProduto.php');
		}
		else{
			require 'pages/produtos.php';
		}



	}


 ?>