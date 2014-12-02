
<?php

include('DAO.php');
   session_start();
       	unset($_SESSION['Usuario']);
    	unset($_SESSION['Senha']);
    	session_destroy();
    	header("location: ../login.php")
    	
?>
