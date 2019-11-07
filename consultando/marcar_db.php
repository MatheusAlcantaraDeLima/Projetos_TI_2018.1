<?php  

include "connect.php";
    
    $especialidade = $_POST['nome_especialidade'];
    $medico = $_POST['medico'];
    $diaEHora = $_POST['diaEHora']; 
    session_start();

    $prontuario = $_SESSION['prontuario'];
    

    //$sql = "insert into tb_consulta (especialidade, medico, diaEHora)  values ('".$prontuario."', ".$especialidade."', '".$medico."', '".$diaEHora."')");
    
        mysqli_query($link, "insert into tb_consulta(prontuario, nome_especialidade,medico,diaEHora)values('".$prontuario."', '".$especialidade."','".$medico."','".$diaEHora."')");
        echo "<script>alert('Marcado com sucesso!!')</script>";
   

    header ('location:form_marcar.php');  

?>