                        <?php                        
                        # endereço do tutorial: https://www.devmedia.com.br/php-e-mysql-conectando-e-exibindo-dados-de-forma-rapida-dica/28526
                        
                                                include("connect.php");                                                
                        ?>
<!DOCTYPE html>
<html lang="pt-br"> 

    <head>
        <title>Marcar Consulta</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css"/>
        
        <style>
            body{
                background-color: #1cf;
            }        
            h1, h2, option{
                color: #00f;
                font-weight: bold;
            }
            #img1{
                border-radius: 10%;
            }
            .form-control{
                color: #00f;
                font-weight: bold;
            }
            #texto{
            color: #00f;
            font-weight: bold;
            font-size: 21px;
            }
            #texto2 id="texto2{
            color: #fff;
            font-weight: bold;
            font-size: 20px;
            }
            #texto3{
            color: #000;
            font-weight: bold;
            font-size: 25px;
            }
            #texto4{
            color: #00f;
            font-weight: bold;
            font-size: 20px;
            }
            #texto5{
            color: #000;
            font-weight: bold;
            font-size: 20px;
            }
            #especialidade{
            color: #00f;
            font-weight: bold;
            font-size: 21px;
            }       
        </style> 
        <script>
            function funcao3()
            {
            alert("Consulta marcada! \n Vá para comprovante.");
            }
        </script>   
    </head>

    <body>    

        <div class="container"> 
                    <br>
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

                    <form class="form-group" method="post" action="marcar_db.php">
                        <br><br>
                        <h1>Marcar Consulta</h1> 

                        <h2 id="texto4">Especialidade Médica</h2>
                        <input type="hidden" value="" id="getId">   

                        <select id="especialidade" name="nome_especialidade" class="form-control sel" onChange="pegaId(this.value);">
                           <option></option> 
                            <option value="Clinica Medica" id="texto">Clinica Medica</option>
                            <option value="Cardiologia" id="texto">Cardiologia</option>
                            <option value="Endoclinologia" id="texto">Endoclinologia</option>
                            <option value="Geriatria" id="texto">Geriatria</option>
                            <option value="Gastroenterologia" id="texto">Gastroenterologia</option>
                        </select>                        

                        <h2 id="texto4">Médico</h2>
                       
                        <select name="medico" class="form-control" id="especialidade">
                                <option class="form_control" id="texto3"></option>  
                        <!--    <option id="texto3">Clínica Médica</option>           
                                <option value="Paulo Alves" id="texto">Paulo Alves</option>
                                <option value="Eneida sousa" id="texto">Eneida Sousa</option>     -->
                                <optgroup label="Clínica Médica" id="texto5">
                                    <option>Paulo Alves</option>
                                    <option>Eneida Sousa</option>
                                </optgroup>                       
                        <!--   <option id="texto3">Cardiologia</option>  
                                <option value="Alessandra Pinheiro" id="texto">Alessandra Pinheiro</option>
                                <option value="Celso Furtado" id="texto">Celso Furtado</option>
                                <option value="Sonia Regina" id="texto">Sonia regina</option>     -->
                                <optgroup label="Cardiologia" id="texto5">
                                    <option>Alessandra Pinheiro</option>
                                    <option>Celso Furtado</option>
                                    <option>Sonia Regina</option>
                                </optgroup>
                        <!--    <option id="texto3">Endoclinologia</option>  
                                <option value="Murilo Filho" id="texto">Murilo Filho</option>
                                <option value="Antonio Castro" id="texto">Antonio Castro</option>  -->
                                <optgroup label="Endoclinologia" id="texto5">
                                    <option>Murilo Filho</option>
                                    <option>Antonio Castro</option>
                                </optgroup>
                        <!--    <option id="texto3">Geriatria</option>  
                                <option value="Manoel Ribeiro" id="texto">Manoel Ribeiro</option>
                                <option value="José Filho" id="texto">José Filho</option>         -->
                                <optgroup label="Geriatria" id="texto5">
                                    <option>Manoel Ribeiro</option>
                                    <option>José Filho</option>
                                </optgroup>
                        <!--   <option id="texto3">Gastroenterologia</option>  
                                <option value="Mariana rios" id="texto">Mariana Rios</option>
                                <option value="Mariano José" id="texto">Mariano José</option>     -->
                                <optgroup label="Gastroenterologia" id="texto5">
                                    <option>Mariana Rios</option>
                                    <option>Mariano José</option>
                                </optgroup>
                        </select>           <br>

                    <!--      <h2 style="text: center">Dia e Hora</h2>
                         <input type="text" name="diaEHora" class="form_control" id="texto" placeholder="">     <br><br>

                       <h2 style="text: center">Número do Prontuário</h2>
                         <input type="number" name="prontuario" class="form_control" id="texto" placeholder=" ">     <br><br>  -->
                    
                        <input type="submit" class="btn btn-primary" onclick="funcao3()" id="texto2" value="Marcar"> <br><br>

                        <a href="comprovante.php" class="btn btn-primary" id="texto2">Comprovante</a> 

                    </form>   
                </div>
                    <div class="col col-sm-4"></div> 
            </div>      
        </div>     
    </body>
</html>
                  

