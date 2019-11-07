<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--Adicionado CSS-->
	<link rel="stylesheet" href="css/estiloImgGrupo.css">
	<!--Tags Meta-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VaGou!</title>
</head>
<body>
	<div class="container">
		<?php
			include_once("menu.php");
		?>
		<hr>
		<div class="card text-center">
			<div class="card-body">
				<h5 class="card-title">Conatatos</h5>
				<p class="card-text"><strong>Email:</strong> vagou@contato.com</p>
				<p class="card-text"><strong>Telefone:</strong> (21) 48751-4751</p>
			</div>
		</div>
	</div>
	<!--Adicionando footer-->
    <?php
        include_once("footer.php");
    ?>
</body>
</html>