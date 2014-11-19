<!DOCTYPE html>
<?php 
  ob_start();
 ?> 
 <html>
 <head>
 	<meta charset="utf-8">
 	<title> upload</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
 </head>
  <body>

<div class="container">
  <div class="row-fluid">
  	<div class="span12">
  		&nbsp;
  	</div>
  </div>


 
    <div class="row" id="main-content">
    <div class="well" align="center">
    <div class="span4" id="sidebar">
    <h1 class="text-primary">Cadastro de Anúncios</h1>

 <form action="model/processa-anuncio.php" enctype="multipart/form-data" id="cadastraAnuncio" method="POST">
    <fieldset>
        <legend></legend>

            <input type="text" name="titulo" id="titulo" placeholder="Título do Anúncio" class="form-control">
            <textarea name="descricao" id="descricao" class="form-control"></textarea><br>
            <span class="text-primari">Selecione um anúncio</span>
            <input type="file" id="foto" name="foto" />
            <br>
            <input type="submit" id="enviar"  class="btn btn-primary" value="Salvar">&nbsp;&nbsp;&nbsp;
            <input type="reset" class="btn btn-primary" value="Limpar">&nbsp;&nbsp;&nbsp;
            <a href="#">Voltar</a>
    </fieldset>
    </form>
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