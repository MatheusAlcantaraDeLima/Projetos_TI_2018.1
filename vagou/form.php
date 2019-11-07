<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Adicionado CDN do Bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--Adicionando Jquery-->
		<script
			src="https://code.jquery.com/jquery-3.4.1.min.js"
			integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			crossorigin="anonymous">
		</script>
		<!--Adicionando o plugin de máscara do jQuery-->
		<script src="js/jquery/src/jquery.mask.js" type="text/javascript"></script>
        <!--Adicionado Web Service para procurar e preencher os campos do PJ após inserir o CEP-->
        <script src="js/webServiceCep.js" type="text/javascript"></script>
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
        <h3>Cadastrar</h3>
        <!--Ao clicar em uma das opções abaixo, será mostrado um formulário de acordo com o perfil do usuário (pessoa física ou jurídica)-->
        <input type="button" id="pf"  class="btn btn-primary" name="perfil" value="Pessoa Física"> &nbsp;&nbsp;
        <input type="button" id="pj" class="btn btn-primary" name="perfil" value="Pessoa Jurídica">
        <!--FORM pessoa física-->
        <form action="validaFormPF.php" method="post" id="formFisica">
            <div class="form-group">
                <label><span class="sr-only">Nome</span><input type="text" name="nomePF" placeholder="Digite seu nome" class="form-control" size="100" maxlength="50" required></label>
                <label><span class="sr-only">E-mail</span><input type="text" name="emailPF" placeholder="Digite seu e-mail" class="form-control" size="100" maxlength="100" required></label>
                <label><span class="sr-only">Data de Nascimento</span><input type="date" name="dataNasci" id="dataNasci" placeholder="Digite sua data de nascimento" class="form-control" size="100" required></label><small>*Data de nascimento</small>
                <label><span class="sr-only">CPF</span><input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF ex: 999.999.999-99" class="form-control" size="100"  required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"></label>
                <label><span class="sr-only">Senha</span><input type="password" name="senhaPF" placeholder="Digite sua senha" class="form-control" size="100" maxlength="20" required></label>
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-success">
            <input class="btn btn-danger" type="reset" value="Resetar">
        </form>
        <!--FORM pessoa jurídica-->
        <form action="validaFormPJ.php" method="post" id="formJuridica">
            <div class="form-group">
                <label><span class="sr-only">Nome do estacionamento</span><input type="text" name="nomePJ" placeholder="Digite o Nome do estacionamento" class="form-control" size="100" maxlength="40" required></label>
                <label><span class="sr-only">E-mail da empresa</span><input type="text" name="emailPJ" placeholder="Digite o e-mail da empresa" class="form-control" size="100"  maxlength="100" required></label>
                <label><span class="sr-only">Telefone</span><input type="text" name="telefone" id="telefone" placeholder="Digite o número de telefone ex: (99) 99999-9999" class="form-control" size="100" required pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}"></label>
                <label><span class="sr-only">CNPJ</span><input type="text" name="cnpj" id="cnpj" placeholder="Digite o CNPJ ex: 99.999.999/9999-99" class="form-control" size="100" required pattern="\d{2}\.\d{3}\.\d{3}/\d{4}-\d{2}"></label>
                <label><span class="sr-only">CEP</span><input type="text" name="cep" id="cep" placeholder="Digite o CEP" class="form-control" size="100" required onblur="pesquisacep(this.value);"></label>
                <label><span class="sr-only">Rua</span><input type="text" name="rua" id="rua" placeholder="Digite a Rua" class="form-control" size="100" required></label>
                <label><span class="sr-only">Bairro</span><input type="text" name="bairro" id="bairro" placeholder="Digite o bairro" class="form-control" size="100" required></label>
                <label><span class="sr-only">Cidade</span><input type="text" name="cidade" id="cidade" placeholder="Digite a cidade" class="form-control" size="100" required></label>
                <label><span class="sr-only">estado</span><input type="text" name="estado" id="uf" placeholder="Digite o Estado" class="form-control" size="100" required></label>
                <label><span class="sr-only">Preço por hora</span><input type="text" name="preco_hora" placeholder="Digite o preço por hora (R$)" class="form-control preco" size="100" required maxlength="9"></label>
                <label><span class="sr-only">Preço por dia</span><input type="text" name="preco_dia" placeholder="Digite o preço por dia (R$)" class="form-control preco" size="100" maxlength="9"></label>
                <label><span class="sr-only">Preço por semana</span><input type="text" name="preco_semana" placeholder="Digite o preço por semana (R$)" class="form-control preco" size="100" maxlength="9"></label>
                <label><span class="sr-only">Preço por mês</span><input type="text" name="preco_mes" placeholder="Digite o preço por mes (R$)" class="form-control preco" size="100" maxlength="9"></label>
                <label><span class="sr-only">Preço por ano</span><input type="text" name="preco_ano" placeholder="Digite o preço por ano (R$)" class="form-control preco" size="100" maxlength="9"></label>
                <label><span class="sr-only">Senha</span><input type="password" name="senhaPJ" placeholder="Digite a senha" class="form-control" size="100"  maxlength="20" required></label>
            </div>
            <input type="submit" value="Cadastrar" class="btn btn-success">
            <input class="btn btn-danger" type="reset" value="Resetar">
        </form>
    </div>
		<!--Adicionando máscara para o CPF, CNPJ, CEP e DATA-->
		<script type="text/javascript">
			$(document).ready(function(){
                $("#cpf").mask("000.000.000-00");
				$("#cnpj").mask("00.000.000/0000-00");
				$("#cep").mask("99999-999");
				$("#telefone").mask("(00) 00000-0000");
                $(".preco").mask("#.##0,00", {reverse: true});
			});
		</script>
    <!--Chamando arquivo js com funções de interação do usuário com o form-->
    <script src="js/formCad.js"></script>
    <!--Adicionando footer-->
    <?php
        include_once("footer.php")
    ?>
</body>
</html>
