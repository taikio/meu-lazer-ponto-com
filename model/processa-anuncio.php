<?php

// estas variáveis recebem a imagem do anuncio e divide o array em nome, tipo, tamanho e endereco.
$imagem = $_FILES['foto']['name'];
$tipoArquivo = $_FILES['foto']['type'];
$tamanhoArquivo = $_FILES['foto']['size'];
$pastaArquivo = $_FILES['foto']['tmp_name'];


//estas variáveis recebem o título e a descrição do anuncio.

 $titulo = $_POST['titulo'];
 $descricao = $_POST['descricao']; 
 

 if(isset($_FILES['foto'])){ 


 $permitido = array('image.jpeg','image.jpg');
  

  include('DAO.php');
   

    @$sql = "INSERT INTO anuncios(nome,titulo,descricao) VALUES('$imagem','$titulo','$descricao')"; 

    @$cadastra = pg_exec($conn,$sql);

    pg_close($conn);

    move_uploaded_file($_FILES['foto']['tmp_name'], "img/".$_FILES['foto']['name']);   

  echo "<script type=\"text/javascript\">alert(\"Seu arquivo foi enviado com sucesso\");</script>"; 

  echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://localhost/Projeto-meu-lazer-ponto-com/cadastra-anuncios.php'>";

  
   

  //echo "Seu anuncio foi cadastrado com sucesso!";

  }
  
?>
