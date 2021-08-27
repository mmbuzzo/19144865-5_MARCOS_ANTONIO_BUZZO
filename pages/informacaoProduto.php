<?php 
	include_once("dados/inforProdutos.php");
	$cod = $_GET['cod'];
	
 ?>

<div id="imagemPaginaPrincipal">

	<div class="imgDestaqueInformacaoProduto">

		<img src=" <?php echo $produtos[$cod]['img']?>">
		
	</div>
	<div class="destaque">
		<h1><?php echo $produtos[$cod]['titulo']  ?></h1>
		<p>
			<?php echo $produtos[$cod]['informacao']  ?>
		</p>
		<h2>R$: <?php echo $produtos[$cod]['valor']  ?></h2>
		<select name="select">
			<option value="#" selected>Quantidade</option>
			<option value="valor1"> 1</option>
			<option value="valor2"> 2</option>
			<option value="valor3"> 3</option>
		</select><br>
		<a href="index.php?pg=5&cod=<?php echo$cod ?>"> <p class="comprar"> COMPRAR</p></a>
		
	</div>
</div>
