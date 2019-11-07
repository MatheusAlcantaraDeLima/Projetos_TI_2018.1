<?php  
    include "connect.php";

    $nome = $_POST['nome'];
    $unidade = $_POST['unidade'];
    $prontuario = $_POST['prontuario'];
    $senha = $_POST['senha'];

     
   mysqli_query($link, "insert into tb_usuario(nome,unidade,prontuario,senha)values('$nome','$unidade','$prontuario','$senha')");
    
    header ('location:form_insert.php');  

 
?>

