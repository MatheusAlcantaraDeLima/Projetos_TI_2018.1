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
    <style>
        tr{
            border:1px solid #007bff;
        }
        th{
            border:1px solid #007bff;
        }
        td{
            border:1px solid #007bff;
        }
    </style>
    <div class="container">
        <?php
            include_once("menuFuncoes.php");
            include_once("conexao.php");
            mysqli_set_charset($conexao, "utf8");
		?>
        <hr>
        <h2 style="text-align: center;">Compara</h2>
        <?php
            //Mostra os estaiconamentos de forma ascendente com relação aos valores($)
            $querySelect =  "select id_estacio, nome_estacio, telefone, rua, bairro, cidade, preco_hora, diario, semanal,mensal from estacionamento order by preco_hora, diario, semanal,mensal ASC";
            $execQuery = mysqli_query($conexao, $querySelect);
            if(mysqli_num_rows($execQuery) > 0){

        ?>
        <div class="table-responsive">
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
                }//fecha o while
            ?>
            </table> <!--FIM DA TABLE--> 
        </div>
            <?php
                }//fecha o if
            ?>
    </div>
    <?php
        include_once("footer.php");
    ?>
</body>
</html>