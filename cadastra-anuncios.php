<?php
  require_once "controller/valida.php";
?>

<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title> upload</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

  <style type="text/css">
  #box {
    width: 400px;
    height: 350px;
  }
  </style>

 </head>
  <body>

<div class="container">
  
   <?php 
        require_once 'header-adm.php';
    ?>
     <br>
    <div class="row" id="main-content">
    <div class="well" align="center">
    <div class="span4" id="sidebar">

   <div id="box"> 
    <h1 class="text-primary">Cadastro de Anúncios </h1>

 <form action="model/processa-anuncio.php" enctype="multipart/form-data" id="cadastraAnuncio" method="POST">
    <fieldset>
        <legend></legend>

            <input type="text" name="titulo" id="titulo" placeholder="Título do Anúncio" class="form-control">
            <textarea name="descricao" id="descricao" class="form-control"></textarea><br>
            <span class="text-primari">Selecione um anúncio</span>
            <input type="file" id="foto" name="foto" class="form-control" />
            <br>
            <input type="submit" id="enviar"  class="btn btn-primary" value="Salvar">&nbsp;&nbsp;&nbsp;
            <input type="reset" class="btn btn-primary" value="Limpar">&nbsp;&nbsp;&nbsp;
            <a href="http://localhost/Projeto-meu-lazer-ponto-com/administracao.php">Voltar</a>
    </fieldset>
    </form>
   </div> 
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