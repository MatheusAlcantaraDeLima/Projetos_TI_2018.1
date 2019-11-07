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
        <h2 style="text-align: center;">Reserva</h2>
        <form>
            <input type="number" name="id" class="form-control" placeholder=" Digite o ID do estacionamento" min="1"><br>
            <input type="submit" value="buscar" class="btn btn-primary">
        </form>
        <?php
            include_once("conexao.php");
            mysqli_set_charset($conexao, "utf8");
            if(isset($_GET["id"])){
                $id = $_GET['id'];
            
                $selectIdEstacio = "select id_estacio, nome_estacio, telefone, rua, bairro, cidade, preco_hora, diario, semanal, mensal from estacionamento where id_estacio like '".$id."' ";
            
                $execQuery = mysqli_query($conexao, $selectIdEstacio);
                if(mysqli_num_rows($execQuery) > 0){
        ?><br>
        <table class="table table-dark">
                <thead>
                    <tr style="text-align: center;">
                        <th scope="col">ID</th>
                        <th scope="col">Nome do estacionamento</th>
                        <th scope="col">telefone</th>
                        <th scope="col">Rua</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Preço por Hora(R$)</th>
                        <th scope="col">Preço por Dias(R$)</th>
                        <th scope="col">Preço por Semanas(R$)</th>
                        <th scope="col">Preço por Mês(R$)</th>
                    </tr>
                </thead>
        <?php
            while($rows = mysqli_fetch_array($execQuery)){
        ?>
        <tbody>
            <tr style="text-align: center;">
                <td ><?php echo $rows["id_estacio"] ?></td>
                <td ><?php echo $rows["nome_estacio"] ?></td>
                <td ><?php echo $rows["telefone"] ?></td>
                <td ><?php echo $rows["rua"] ?></td>
                <td ><?php echo $rows["bairro"] ?></td>
                <td ><?php echo $rows["cidade"] ?></td>
                <td ><?php echo $rows["preco_hora"] ?></td>
                <td ><?php echo $rows["diario"] ?></td>
                <td ><?php echo $rows["semanal"] ?></td>
                <td ><?php echo $rows["mensal"] ?></td>							
            </tr>    
        </tbody>
        <?php
            $_SESSION['id_estacio'] = $rows['id_estacio'];
            }   //FIM DO WHILE    
        ?>
        </table><!--FIM DA TABLE-->
        <form method="get">
            <label>
                Datade e hora de entrada: <br>
                <input type="date" class="form-control" name="data_entrada"><input type="time" class="form-control" name="hora_entrada" required>
            </label><br>
            <label>
                Datade e hora de saída: <br>
                <input type="date" class="form-control" name="data_saida" required><input type="time" class="form-control" name="hora_saida" required><br>
            </label><br>
            <input type="submit" value="Reservar" class="btn btn-primary" required>
        </form>
        <?php
                //FIM DO IF E INÍCIO DO ELSE
                }else{
                    echo "<script> alert('Nenhum estacionamento encontrado com o ID informado. Favor, insira um id válido') </script>";
                }
            }    //FIM DO PRIMEIRO IF    
            if(isset($_GET['data_entrada'], $_GET['data_saida'], $_GET['hora_entrada'], $_GET['hora_saida'])){
                $data_entrada = $_GET['data_entrada'];
                $data_saida = $_GET['data_saida'];
                $hora_entrada = $_GET['hora_entrada'];
                $hora_saida = $_GET['hora_saida'];
                
                $sysData = date("Y-m-d"); //pega a data do sistema
                //não permite que datas erradas sejam cadastradas na table
                if( (($data_entrada >= $sysData) && ($data_saida >= $sysData)) || (($data_entrada == $data_saida) && ($hora_entrada > $hora_saida)) ){
                   
                    $email = $_SESSION['email'];
                    $id_estacio = $_SESSION['id_estacio'];
                    $selectId =  "select CPF from cliente where email like '".$email."' ";
                    $executaBusca = mysqli_query($conexao, $selectId);
                    $buscaId = mysqli_fetch_array($executaBusca);
                    $idCliente = $buscaId['CPF'];

                    $insereReserva = "insert into reservar (id_estacionamento ,data_entrada, hora_entrada, data_saida, hora_saida, cpf_cliente) values ('".$id_estacio."', '".$data_entrada."', '".$hora_entrada."', '".$data_saida."', '".$hora_saida."', '".$idCliente."'); ";
                    
                    if(mysqli_query($conexao, $insereReserva)){
                        echo "<script> alert('Vaga Reservada com sucesso.') </script>";
                    }else{
                        echo "<script> alert('Erro ao reservar a vaga.') </script>";
                        //TESTES PARA VERIFICAR SE OS VALORES ESTÃO SENDO PEGOS
                        //echo $idCliente.'<br>';
                        //echo $id_estacio.'<br>';
                        //echo $email;
                    }
                }else{
                    echo "<script> alert('A data inserida é inválida ou a hora inserida não é válida.') </script>";
                }
            }                     
        ?>
    </div>
    <?php
        include_once("footer.php");
    ?>
</body>
</html>