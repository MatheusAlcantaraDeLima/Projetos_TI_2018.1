<?php
    include_once("conexao.php");


    $email = $_POST['email'];
    $emailEmpresa = "matheusalcantaradelima1997@gmail.com";
    $assunto = "Recuperação da senha";

    //Pega a senha do cliente no BD
    $buscaSenha = "select senha_client from cliente where email like '".$email."' ";
    $execBuscaSenha = mysqli_query($conexao, $buscaSenha);
    $buscaSenha = mysqli_fetch_array($execBuscaSenha);
    $senha = $buscaSenha['senha_client'];

    //Pega o nome do cliente no BD
    $buscaNome = "select nome_client from cliente where email like '".$email."' ";
    $execBuscaNome = mysqli_query($conexao, $buscaNome);
    $buscaNome = mysqli_fetch_array($execBuscaNome);
    $nome = $buscaNome['nome_client'];

    $headers .= "Content-type: text/plain; charset=UTF-8 \r\n";
    $headers .= "From: matheusalcantaradelima1997@gmail.com \r\n";
    $headers .= "Reply-To:".$email." \r\n";
    $headers .= "X=Mailer:PHP".phpversion()." \r\n";


    $mensagem = "Olá '".$nome."', recebemos o seu pedido de recuperação, a sua senha é '".$senha."' ";
    
    if(mail($email, $assunto, $mensagem, $headers)){
        echo "<script>alert('E-mail enviado com sucesso, o e-mail foi enviado para o endereço:'.<?php $email ?>)</script>";
        echo "<script>location.href='logar.php'</script>";
    }else{
        echo "<script>alert('E-mail inexistente, favor, insira um email cadastrado')</script>";
        echo "<script>location.href='recuperaDados.php'</script>";
    }
    //echo $email."<br>";
    //echo $mensagem."<br>";
    //echo $senha."<br>";
    //echo $nome."<br>";
?>