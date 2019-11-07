<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        <form action="recuperaSenha.php" method="post">
            <h3>Recupere sua senha</h3>
            <div class="form-group">
                <input type="text" name="email" placeholder="insira seu e-mail" class="form-control" size="50" required><br>
            </div>
            <input type="submit" value="Enviar e-mail" class="btn btn-primary">
        </form>
	</div>
	<!--Adicionando footer-->
    <?php
        include_once("footer.php")
    ?>
</body>
</html>
