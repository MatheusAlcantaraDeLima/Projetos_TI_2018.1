<html lang="pt-br">
    <head>
        <title>Insert em PHP</title>
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
            font-size: 20px;
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
            h1{
            color: #00f;
            font-weight: bold;
            font-size: 26px;
            }
          
        </style>
        <script>
        
            function funcao1()
            {
            alert  ("Cadastrado com sucesso! \n Vá para login.");
            }
        </script>
        

    </head>

    <body>
        <div class="container">           
                                <br>
            <div class="row"> 

                <div class="col col-sm-4 col-xs-1"></div> 
                <div class="col col-sm-4 col-xs-6">  
                    <img src="img/agenda.png" id="img1">
                </div> 
                <div class="col col-sm-4 col-xs-5"></div> 

            </div>

            <div class="row">   

                <div class="col col-sm-4"></div>

                <div class="col col-sm-4"> 

                    <h1>Cadastrar</h1>

                    <form action="insert.php" method="Post" class="form-group">

                    Nome <br>
                    <input type="text" name="nome" class="form-control" placeholder="Digite o seu nome:" id="texto" required><br>

                    Unidade de Saúde <br>
                    <input type="text" name="unidade" class="form-control" placeholder="Digite a sua unidade de saúde:" id="texto" required> <br>

                    Número de Prontuário <br>
                    <input type="number" name="prontuario" class="form-control" placeholder="Digite o seu número de prontuário:" id="texto" required> <br>

                    Senha <br>
                    <input type="password" name="senha" class="form-control" placeholder="Digite a sua senha:" id="texto" required> <br>
                    
                    <input type="submit" class="btn btn-primary" onclick="funcao1()" id="texto2" value="Cadastrar"> <br><br>

                    <a href="index.php" class="btn btn-primary" id="texto2">Logar</a> 
                    </form>
                </div>

                <div class="col col-sm-4"></div>
            </div>
            
        </div>
        
    </body>
</html>

    
