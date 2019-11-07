<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Tags Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VaGou!</title>
</head>
<body>
    <div class="container">
        <?php
            include_once("menuFuncoes.php");
            session_start(); //INICIANDO A SESSÃO
		?>
        <hr>
        <h2 style="text-align: center;">Reservas Feitas</h2>
        <?php
                include_once("conexao.php");
                mysqli_set_charset($conexao, "utf8");
                
                $email = $_SESSION['email'];
                $selectId =  "select CPF from cliente where email like '".$email."' ";
                $executaBusca = mysqli_query($conexao, $selectId);
                $buscaId = mysqli_fetch_array($executaBusca);
                $idCliente = $buscaId['CPF'];

                $selectVaga = "select * from reservar where cpf_cliente like '".$idCliente."' ";
            
                $execQuery = mysqli_query($conexao, $selectVaga);
                if(mysqli_num_rows($execQuery) > 0){
                    ?><br>
                    <table class="table table-dark">
                            <thead>
                                <tr style="text-align: center;">
                                    <th scope="col">ID vaga</th>
                                    <th scope="col">ID estacionamento</th>
                                    <th scope="col">data de entrada</th>
                                    <th scope="col">Hora de entrada</th>
                                    <th scope="col">Data de saída</th>
                                    <th scope="col">Hora de saída</th>
                                    <th scope="col">CPF</th>
                                </tr>
                            </thead>
                    <?php
                        while($rows = mysqli_fetch_array($execQuery)){
                    ?>
                        <tbody>
                            <tr style="text-align: center;">
                                <td><?php echo $rows["id_vaga"] ?></td>
                                <td><?php echo $rows["id_estacionamento"] ?></td>
                                <td><?php echo $rows["data_entrada"] ?></td>
                                <td><?php echo $rows["hora_entrada"] ?></td>
                                <td><?php echo $rows["data_saida"] ?></td>
                                <td><?php echo $rows["hora_saida"] ?></td>
                                <td><?php echo $rows["cpf_cliente"] ?></td>							
                            </tr>    
                        </tbody>
                    <?php
                        }   //FIM DO WHILE    
                    ?>
                    </table><!--FIM DA TABLE-->
        <?php
                }
        ?>
        <form>
            <label for="inputID"><span class="sr-only">ID da vaga</span></label>
            <input type="number" class="form-control" placeholder="Digite o ID da vaga para desmarcar a reserva efetuada." name="idVaga" id="inputID" min="1"><br>
            <input type="submit" value="Desmarcar Reserva" class="btn btn-danger">
        </form>
        <?php
            if(isset($_GET['idVaga'])){
                $idVaga = $_GET['idVaga'];
                if($idVaga >= 1){
                    $deletaVaga = "delete from reservar where id_vaga = ".$idVaga;
                    $execQuery = mysqli_query($conexao, $deletaVaga);
                    echo "<script>alert('Reserva deletada com sucesso.')</script>";
                    echo "<script>location.href='reservas.php'</script>";
                }else{
                    echo "<script>alert('ID inválido, favor, insira novamente.')</script>";
                }
            }
        ?>
    </div>
    <?php
        include_once("footer.php");
    ?>
</body>
</html>