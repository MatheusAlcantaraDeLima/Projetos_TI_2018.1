
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Comprovante da Consulta</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css"/>

        <style>
			 body{
                background-color: #1cf;
                color: #00f;
                font-weight: bold;
                text-align: center;
                font-size: 22px;
             }
             .titulo{
                 font-size: 26px;
             } 
             #img1{
                 border-radius: 10%;
             }                 
        </style>
	</head>
	<body> 
        <div class="container">        <br>

            <div class="row"> 
                <div class="col col-sm-4"></div> 
                <div class="col col-sm-4">  
                    <img src="img/agenda.png" id="img1">
                </div> 
                <div class="col col-sm-4"></div> 
            </div>              

              <div class="row"> 
			  
				<div class="col col-sm-4"></div> 
				
				<div class="col col-sm-4">  <br>
			            <p class="titulo">Comprovante da Consulta</p> 

                    <?php                     
                         include "connect.php";

                         session_start(); 

                         $prontuario =  $_SESSION['prontuario'];
                        //var_dump($prontuario);

                        $sql = "select * from tb_usuario where prontuario like '".$prontuario."' ";

                        $consulta = mysqli_query($link, $sql);



                        while ($medico = mysqli_fetch_array($consulta)) {

                            $id = $medico[0];
                            $nome = $medico[1];
                            $unidade = $medico[2];
                            $prontuario = $medico[3];

                            echo ("<td class='linha'>Usuário         : $nome</td><br>");
                            echo ("<td class='linha'>Unidade de Saúde: $unidade</td><br>");
                            echo ("<td class='linha'>Prontuário      : $prontuario</td>");
                        }   
                        
                      // $sql = mysqli_query($link, "select nome, unidade, prontuario from tb_usuario WHERE nome = '$nome', unidade = '$unidade', prontuario = '$prontuario'");
                         
                        //$total= mysqli_num_rows($sql);
                        
                        /*if(isset($SESSION['logado'])) {
                        
                        $_SESSION['nome']=$nome;
                        $_SESSION['unidade']=$unidade;
                        $_SESSION['prontuario']=$prontuario;
                         //header('location:logout.php');
                          //  }else{
                                
                            unset($_SESSION['nome']);
                            unset($_SESSION['unidade']);
                            unset($_SESSION['prontuario']);
                          // header('location:logout.php');
                           session_destroy();
                           exit();

                      }   */

                    ?>	<br>

                    
                        <?php   
                                
                         include "connect.php";

                        // $_SESSION['prontuario']=$prontuario;

                        $sql = "select * from tb_consulta where prontuario like '".$prontuario."' ";

                        $consulta = mysqli_query($link, $sql);



                        while ($marcar = mysqli_fetch_array($consulta)) {

                            $id = $marcar[0];
                            $especialidade = $marcar[2];
                            $medico = $marcar[3];
                            $diaEHora = $marcar[4];
                        

                            echo ("<td class='linha'>Especialidade : $especialidade</td><br>");
                            echo ("<td class='linha'>Médico        : $medico</td><br>");
                           echo ("<td class='linha'>Dia e Hora    : 03/12/2019 13:00</td><br>");
                          
                        }  
                        
                    ?>	<br>
                     <a href="index.php" class="btn btn-primary">Salvar e Sair</a>		
			    </div>             
			
			    <div class="col col-sm-4"></div> 
            </div>
        </div>
	</body>
</html>