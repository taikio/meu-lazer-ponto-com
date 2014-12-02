<?php
if (!isset($_SESSION)) session_start();


  if(!(isset($_SESSION['Usuario']) && isset($_SESSION['Senha']))){
    header("location: login.php");
    session_destroy();

  }else
  echo "Olar ".$_SESSION['Usuario'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<title>Meu Lazer.com</title>

</head>
<body>
  
  <div class="container">

   
    <?php
       require_once 'header-adm.php';

    ?>

  	
  	<br><br><br>

    <div class="container">
  <div class="row-fluid">
    <div class="span12">
      &nbsp;
    </div>
  </div>


 
    <div class="row" id="main-content">
    <div class="well" align="center">
    <div class="span4" id="sidebar">
    <h1 class="text-primary">Lista usuarios</h1>

 
    <fieldset>
        <legend></legend>
          <table border="2px solid">

                <?php
                function RecebeDados(){
  echo "teste";

}



                   include('model/DAO.php');
                   
                   $busca = pg_query("SELECT * FROM administradores");
 
                   while ($result = pg_fetch_array($busca)) {

                   $nome = $result['nome'];   
                   $login = $result['login'];
                   $cpf = $result['cpf'];
                   $pk = $result['pk_administrador'];
       
                ?>

              
                
                
                    
                      <tr>
                      <td><?php echo "$nome"; ?></td>
                      <td><?php echo "$login"; ?></td>
                      <td><?php echo "$cpf"; ?></td>
                      <td>
                      <form action="edita-usuario.php" method="POST">
                      <input type="hidden" id="valor" name="valor" value="<?php echo "$pk";?>" >
                      <input type="submit" value="editar"></td>
                      </form>
                      </tr>
                    
                      
      
      
                <?php
                    }
                ?>  

           </table>
            
    </fieldset>
   
    </div>
    </div>
    </div>     

</form>
     </div>
    </div>
  </div>
</div> 





 

</body>
</html>