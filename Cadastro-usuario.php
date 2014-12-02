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

    <title>CadastroUsuário</title>
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
    <h1 class="text-primary">Cadastro de Usuários</h1>

    
  <div id="box">
    <form action="model/insere-usuario.php" id="cadastraUsuario" method="POST">    
    <fieldset>
        <legend></legend>

            <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="form-control">
            <input type="text" name="cpf" id="cpf" placeholder="CPF" class="form-control">
            <input type="text" name="rg" id="rg" placeholder="RG" class="form-control">
            <input type="date" name="nascimento" id="nascimento" placeholder="Data de nascimento" class="form-control">
            <input type="text" name="endereco" id="endereco" placeholder="Endereço" class="form-control">
            <input type="text" name="bairro" id="bairro" placeholder="Bairro" class="form-control">
            <input type="text" name="cidade" id="cidade" placeholder="Cidade" class="form-control">
            <input type="tel" name="celular" id="celular" placeholder="Celular" class="form-control">
            <input type="tel" name="telefone" id="telefone" placeholder="Telefone Fixo" class="form-control">
            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
            <input type="text" name="login" id="login" placeholder="Login" class="form-control">
            <input type="password" name="password" id="password" placeholder="Senha" class="form-control">
            <input type="password" name="checkedPassword" id="checkedPassword" placeholder="Confirmar Senha" class="form-control">
<br>
            <input type="submit" id="enviar" onclick=" return validaFormulario()" class="btn btn-primary" value="Salvar">&nbsp;&nbsp;&nbsp;
            <input type="reset" class="btn btn-primary" value="Limpar">&nbsp;&nbsp;&nbsp;
            <a href="#">Voltar</a>
    </fieldset>
    </form>

   </div> 
    </div>
    </div>
    </div>
    </div>
    </body>
    </html>