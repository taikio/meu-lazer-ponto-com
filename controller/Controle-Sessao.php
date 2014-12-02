
<?php

include('DAO.php');
   session_start();
      $Usuario = $_POST['nome'];
   		$Senha	= $_POST['senha'];
	    @$SQL = pg_query("SELECT login FROM administradores WHERE login = '$Usuario' AND senha = '$Senha'");
    if (@pg_num_rows($SQL) != 0){
    	$_SESSION['Usuario'] = $Usuario;
    	$_SESSION['Senha'] = $Senha;
    	pg_close($conn);
    	header("location: ../administracao.php");
    }else{
    	//echo "<script type=\"text/javascript\">alert(\"Voce nao e autorizado\");</script>"; 
    	unset($_SESSION['Usuario']);
    	unset($_SESSION['Senha']);
    	pg_close($conn);
      echo "<script type=\"text/javascript\">alert(\"Usuario ou senha incorretos\");</script>"; 
    	//header("location: ../login.php");
    	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://localhost/Projeto-meu-lazer-ponto-com/login.php'>"; 
    }
  

?>
