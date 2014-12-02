
<?php

include('DAO.php');
if (!isset($_SESSION)) session_start();


  if(!(isset($_SESSION['Usuario']) && isset($_SESSION['Senha']))){
    session_destroy();
    header("location: login.php");
    }else{
        $Usuariores = $_SESSION['Usuario'];
        $Senhares   = $_SESSION['Senha'];
        @$SQL = pg_query("SELECT login FROM administradores WHERE login = '$Usuariores' AND senha = '$Senhares'");
    if (@pg_num_rows($SQL) != 0){
        echo "Bem vindo ".$_SESSION['Usuario'];   
    }else{
        session_destroy();
        header("location: login.php");
    }
   
    }
    
    
?>