<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/menu.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
 	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
 	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

 	<style type="text/css">
    .banner {
    	position: relative;
    	width: 700px;
    	height: 600px;
    }

    img {

    	border: 1px solid;
    	border-radius: 5px;
    }

 	</style>

 	<script type="text/javascript">
      $(function(){

      	$('#carousel-inner').jCarouselLite({

      		auto     : 1000,
		    speed    : 1000,
		    visible  : 1,

      	})
      })

 	</script>
	

	<title>Meu Lazer.com</title>
</head>
<body>
  
  <div class="container">
   
   <?php
   require_once 'header.php';
  ?>

  

  <div class="row" id="main-content">
  	<div class="well" align="center">
  	<br><br><br>
   	<div class="banner">
   	  <section id="slide">
   		  <section class="carousel slide" id="carrossel">
   			   <div class="carousel-inner">
   		
                     
   	                <?php
                          include('model/DAO.php');

                           $busca = pg_query("SELECT * FROM anuncios");
 
                           while ($result = pg_fetch_array($busca)) {

                           $imagem = $result['nome'];   
        	   
       
   	                 ?>


   	                 <figure class="active item">
   						<img src="model/img/<?php echo $imagem; ?>" width="700" height="600">
   						<figurecaption class="carousel-caption">
   							<h4>adjfadjfadjf</h4>
   							<p>dfadjfakjdf</p>
   						</figurecaption> 
   					</figure> 

   					
 					<?php
                        }
                    ?>	
                   
				   	<a href="#carrossel" class="carousel-control left" data-slide="prev">&lsaquo;</a>
   					<a href="#carrossel" class="carousel-control right" data-slide="next">&rsaquo;</a>
   			   </div>
   		  </section> 
   	  </section>	 
    </div>    

   </div>	
  </div>
</div>
 

</body>
</html>