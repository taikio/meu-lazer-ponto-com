<?php
  if (!isset($_SESSION)) session_start();


  if(!(isset($_SESSION['Usuario']) && isset($_SESSION['Senha']))){
    header("location: login.php");
    session_destroy();

  }else
  echo "Olar ".$_SESSION['Usuario'];

    $pk = $_POST['valor'];

                   include('model/DAO.php');
                   
                   $busca = pg_query("SELECT * FROM administradores WHERE pk_administrador = '$pk'");
                  
                  if (@pg_num_rows($busca) != 0){
                   while ($result = pg_fetch_array($busca)) {

                   $nome = $result['nome'];   
                   $cpf = $result['cpf'];
                   $rg = $result['rg'];
                   $nascimento = $result['nascimento'];
                   $endereco = $result['endereco'];
                   $bairro = $result['bairro'];
                   $cidade = $result['cidade'];
                   $celular = $result['celular'];
                   $telefone = $result['telefone'];
                   $email = $result['email'];
                   $login = $result['login'];
                   
                   
                  
                }
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
    <form action="model/edita-usuario.php" id="cadastraUsuario" method="POST">    
    <fieldset>
        <legend></legend>

            <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="form-control" value="<?php echo "$nome";?>" >
            <input type="text" name="cpf" id="cpf" placeholder="CPF" class="form-control"value="<?php echo "$cpf";?>">
            <input type="text" name="rg" id="rg" placeholder="RG" class="form-control" value="<?php echo "$rg";?>">
            <input type="date" name="nascimento" id="nascimento" placeholder="Data de nascimento" class="form-control" value="<?php echo "$nascimento";?>">
            <input type="text" name="endereco" id="endereco" placeholder="Endereço" class="form-control" value="<?php echo "$endereco";?>">
            <input type="text" name="bairro" id="bairro" placeholder="Bairro" class="form-control" value="<?php echo "$bairro";?>">
            <input type="text" name="cidade" id="cidade" placeholder="Cidade" class="form-control" value="<?php echo "$cidade";?>">
            <input type="tel" name="celular" id="celular" placeholder="Celular" class="form-control" value="<?php echo "$celular";?>">
            <input type="tel" name="telefone" id="telefone" placeholder="Telefone Fixo" class="form-control" value="<?php echo "$telefone";?>">
            <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="<?php echo "$email";?>">
            <input type="text" name="login" id="login" placeholder="Login" class="form-control" value="<?php echo "$login";?>">
            <input type="password" name="password" id="password" placeholder="Senha" class="form-control" value="">
            <input type="password" name="checkedPassword" id="checkedPassword" placeholder="Confirmar Senha" class="form-control" value="">
            <input type="hidden" id="pk" name="pk" value="<?php echo "$pk";?>">
<br>
            <input type="submit" id="enviar" onclick="" class="btn btn-primary" value="Salvar">&nbsp;&nbsp;&nbsp;
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
    <?php
  }else{
    header("location: busca-usuario.php");
  }

  ?>