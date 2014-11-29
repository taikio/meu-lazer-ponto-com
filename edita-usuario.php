
  <?php
  if (!isset($_SESSION)) session_start();


  if(!(isset($_SESSION['Usuario']) && isset($_SESSION['Senha']))){
    header("location: login.php");
    session_destroy();

  }else
  echo "Olar ".$_SESSION['Usuario'];

?>
<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>

    <script type="text/javascript" src="bootstrap/js/validacoesFomulario.js"/></script>

    <style type="text/css">
     #box {
        width: 750px;
        height: auto;
     }
    </style>

    <title>Edita-Usuário</title>
</head>

    <body>

    <div class="container">

      <?php 
        require_once 'header-adm.php';
      ?>

      
        <div class="row-fluid">
           <div class="span12">
              &nbsp;
           </div>
      </div>
    

    <div class="row" id="main-content">
    <div class="well" align="center">
    <div class="span4" id="sidebar">
    <h1 class="text-primary">Editar Usuários</h1>

    
    <table>
     <tr>

    <?php
      include('model/DAO.php');

      $sql = pg_query('SELECT * FROM administradores');

      $busca = pg_exec($conn,$sql);

      while ($result = pg_fetch_array($busca)) {

        $nome = $result['nome'];
        # code...
      

    ?>
      
      <td><?php echo $nome; ?></td>

      <?php
       }
       ?>
       </tr>

      </table>

  
    </div>
    </div>
    </div>
    </div>
    </body>
    </html>