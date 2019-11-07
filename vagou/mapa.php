<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.0.1/css/ol.css" type="text/css">
    <!--Tags Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.0.1/build/ol.js"></script>
    <!--Pega a localização do aparelho-->
    <title>VaGou!</title>
</head>
<body>
    <div class="container">
        <?php
			include_once("menuFuncoes.php");
		?>
        <hr>
        <h2 style="text-align: center;">Mapa</h2>
        
            <iframe class = "embed-responsive-item" src="https://embed.waze.com/iframe?zoom=13&lat=-22.954803200000004&lon=-42.7761664"
            width="1100" height="830" allowfullscreen></iframe>
        
        
        <script type="text/javascript">
            var lat;
            var long;
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition);
            }else{
                window.alert('Seu navegador não suporta  ageolocalização.');
            }
            function showPosition(position){
                lat = position.coords.latitude;
                long = position.coords.longitude;
                console.log(`Latidute ${lat}, Longitude ${long}`);
            }
        </script>
    </div>
    <?php
        include_once("footer.php");
    ?>
</body>
</html>