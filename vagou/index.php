<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>VaGou!</title>
	<link rel="stylesheet" href="css/estiloFuncoes.css">
	<!--Tags Meta-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="container">
		<?php
			include_once("menu.php");
		?>
		<hr>
		<h2 style="text-align: center;">Funções do APP</h2><br>
		<img src="img/busca.png" alt="Funcionalidade de busca por estacionamentos com vagas" class="img-fluid">
		<img src="img/compara.png" alt="Funcionalidade de comparação de preço" class="img-fluid">
		<img src="img/reserva.png" alt="Funcionalidade para reservar vagas em um estacionamento." class="img-fluid">
	</div>
	<!--Adicionando footer-->
    <?php
        include_once("footer.php");
    ?>
</body>
</html>
