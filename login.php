<?php
    if (!isset($_SESSION)) session_start();
    if(isset($_SESSION['Usuario']) && isset($_SESSION['Senha'])){
        header("location: administracao.php");
    }
?>


<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>

    <script type="text/javascript" src="bootstrap/js/validacoesFomulario.js"/></script>

    <style type="text/css">
      #login {
        width: 300px;
        height: 300px;
      }
      #logo{
        margin-top: 3px;
        margin-left: 20px;
      }
    </style>

    <title>Area Administrativa</title>
</head>

    <body>



    <div class="container">

        <div class="row-fluid">
           <div class="span12">
              &nbsp;
           </div>
      </div>
    <div class="well" >
    <div class="row" id="main-content">
    
       <div id="logo">
          <a href="http://localhost/Projeto-meu-lazer-ponto-com/index.php"><img src="icons/logo.jpg" alt="Meu Lazer.com" width = "280" height = "150"/></a>
       </div>

    <div class="span4" id="sidebar" align="center">
    <h1 class="text-primary">Área Administrativa</h1>
   <div id="login">
    <form action="controller/Controle-Sessao.php" enctype="multipart/form-data" id="login" method="POST">
    <fieldset>
        <legend></legend>

            <input type="text" id="nome" name="nome" placeholder="Nome de Usuário" class="form-control">
            <input type="password" id="senha" name="senha" placeholder="Senha" class="form-control">
<br>
            <input type="submit" id="enviar" class="btn btn-primary" value="Entrar">&nbsp;&nbsp;&nbsp;
            <input type="reset" class="btn btn-primary" value="Limpar">&nbsp;&nbsp;&nbsp;
            <a href="">Voltar</a>
    </fieldset>
    </form>
   </div> 
    </div>
    </div>
    </div>
    </div>
    </body>
    </html>