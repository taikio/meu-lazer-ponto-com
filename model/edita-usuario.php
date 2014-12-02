<?php
$pk = $_POST['pk'];
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

  $sql = "UPDATE administradores SET 
  nome='$nome',
  cpf = '$cpf',
  rg = '$rg',
  nascimento = '$nascimento',
  endereco = '$endereco',
  bairro = '$bairro',
  cidade = '$cidade',
  celular = '$celular',
  telefone ='$telefone',
  email = '$email' 
  WHERE pk_administrador = $pk";  


 	$cadastra = pg_exec($conn,$sql) or die();
  //if($cadastra){
   // header("location: ../busca-usuario.php");
  //}else{
  //  header("location: ../edita-usuario.php");
  //}
  pg_close($conn);
  //echo "<script type=\"text/javascript\">alert(\"Usuario cadastrado com sucesso!\");</script>"; 

  //echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://localhost/Projeto-meu-lazer-ponto-com/cadastro-usuario.php'>";

       
?>