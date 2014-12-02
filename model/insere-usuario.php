<?php

  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $rg = $_POST['rg'];
  $nascimento = $_POST['nascimento'];
  $endereco = $_POST['endereco'];
  $bairro = $_POST['bairro'];
  $cidade = $_POST['cidade'];
  $celular = $_POST['celular'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $login = $_POST['login'];
  $password = $_POST['password'];


  include('DAO.php');


  @$sql = "INSERT INTO administradores(nome,cpf,rg,nascimento,endereco,bairro,cidade,celular,telefone,email,login,senha) 
  VALUES('$nome','$cpf','$rg','$nascimento','$endereco','$bairro','$cidade','$celular','$telefone','$email','$login','$password')" 
  ;


  	$cadastra = pg_exec($conn,$sql);
    pg_close($conn);

  //echo "<script type=\"text/javascript\">alert(\"Usuario cadastrado com sucesso!\");</script>"; 

  //echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://localhost/Projeto-meu-lazer-ponto-com/cadastro-usuario.php'>";

       
?>