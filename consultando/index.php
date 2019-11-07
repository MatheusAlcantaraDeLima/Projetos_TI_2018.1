<html lang="pt-br">
    <head>
        <title>Select em PHP</title>
        <meta charset="utf-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css"/>

     <style>
        body{
            background-color: #1cf;
        }
        form{
            color: #00f;
            font-weight: bold;
        }
        h1{
            color: #00f;
            font-weight: bold;
            font-size: 26px;
        }
        p{
            color: #00f;
            font-weight: bold;
            font-size: 20px;
        }

        .btn{
            font-size: 20px;
            font-weight: bold;
        }
        #img1{
            border-radius: 10%;
        }
        #texto{
            color: #00f;
            font-weight: bold;
            font-size: 20px;
        }
        #texto2{
            color: #fff;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
    <script>
            function funcao2()
            {
            alert("Acesso permitido!");
            }
    </script>
    </head>
	
    <body>

        <div class="container">        <br>

             <?php 
                session_start();                    
            ?>

            <div class="row"> 

                <div class="col col-sm-4"></div> 
                <div class="col col-sm-4">  
                    <img src="img/agenda.png" id="img1">
                </div> 
                <div class="col col-sm-4"></div> 

            </div>

            <div class="row">   

                <div class="col col-sm-4"></div>

                <div class="col col-sm-4"> 

                    <h1>Fazer Login</h1>

                    <form action="select.php" method="post" class="form-group"><br><br>

                       <p>Número de Prontuario</p>
                        <input type="number" name="prontuario" class="form-control" id="texto" placeholder="Digite o seu prontuario:" required> <br><br>

                       <p>Senha</p>
                        <input type="password" name="senha" class="form-control" id="texto" placeholder="Digite a sua senha:" required> <br><br>

                     <input type="submit" onclick="funcao2()"value="Entrar" class="btn btn-primary">  <!--

                        <a href="form_marcar.php" class="btn btn-primary" id="texto2">Entrar</a>-->
                        <br> 
                      
                        <h2>Não é cadastrado???</h2>   

                        <a href="form_insert.php" class="btn btn-primary" id="texto2">Cadastre-se</a>

                    </form> 
                </div>
                <div class="col col-sm-4"></div>
            </div>
           

        </div>
    </body>
</html>
