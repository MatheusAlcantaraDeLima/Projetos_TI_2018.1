<?php
    include "connect.php";
    session_start();
//if (isset ($_POST['prontuario'])){$prontuario=$_POST['prontuario'];}
//if (isset ($_POST['senha'])){$senha=$_POST['senha'];}

/*if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}*/


$prontuario = $_POST['prontuario'];
$senha = $_POST['senha'];

//var_dump($prontuario);
//var_dump($senha);
  $sql = mysqli_query($link, "select prontuario, senha from tb_usuario WHERE prontuario like '".$prontuario."' ");
  //$sql = mysqli_query($link, "select prontuario, senha from tb_usuario WHERE prontuario = '$prontuario' AND senha = '$senha'");
  

    $total= mysqli_num_rows($sql);
    
if($total>0){

    $_SESSION['prontuario'] = $prontuario;
    
    $_SESSION['senha']=$senha;
    header('location:form_marcar.php');
}else{

    unset($_SESSION['prontuario']);
    unset($_SESSION['senha']);
    header('location:index.php');
}

if(!isset($_SESSION))
{
   echo("Não iniciou");
}else{
    echo("Iniciou");
}

 
    /*if($total!=0){

     while($teste = mysqli_fetch_assoc($sql)){
      
            //$teste['prontuario']. " - " . $teste['senha'];
            $senhaDoBanco = $teste['senha'];
            }

    if(!strcmp($senha, $senhaDoBanco)){
        //echo("Logar com o usuário informado");
        //echo "<script>alert('Acesso permitido.');</script>";

        $_SESSION['prontuario'] = $prontuario;
        $_SESSION['senha'] = $senha;

        header ('location: marcar.php');

    }else{

        unset ($_SESSION['prontuario']);
        unset ($_SESSION['senha']);

        header ('location: index.php');

        //echo("Usuário ou senha inválidos");
        //echo "<script>alert('Usuário ou senha inválidos.');</script>";
    }
}*/

?>


