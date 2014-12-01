<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/menu.css">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
 	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
 	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/npm.js"></script>
  <script type="text/javascript" src="bootstrap/js/jCarouselLite.min.js"></script>

  <script type="text/javascript">

    $ (function() {
    $("#myCarousel").jCarouselLite ({
              btnPrev  : '.prev',
              btnNext  : '.next',
              auto     : 5000,
              speed    : 1500,
              visible  : 1,
              })
    })
  </script>

  <script type="text/javascript">
    $ (function() {
    $("#hospedagem1").jCarouselLite ({
              btnPrev  : '.prev',
              btnNext  : '.next',
              auto     : 5000,
              speed    : 1500,
              visible  : 1,
              });
    });

    $ (function() {
    $("#hospedagem2").jCarouselLite ({
              btnPrev  : '.prev',
              btnNext  : '.next',
              auto     : 5000,
              speed    : 1500,
              visible  : 1,
              });
    });

    $ (function() {
    $("#hospedagem3").jCarouselLite ({
              btnPrev  : '.prev',
              btnNext  : '.next',
              auto     : 5000,
              speed    : 1500,
              visible  : 1,
              });
    });

  </script>

 	<style type="text/css">
    #banner-principal {
    	float: left;
    	width: 900px;
    	height: 600px;
      margin-left:6px;

    }

    #principal {
      width: 1000;
      height: 700px;
      margin-left: 65px;
      margin-right: -50px;
      float: left;
    }

    img {

    	border: 1px solid;
    	border-radius: 5px;
    }

    #hospedagens {
      float: left;
      margin-top: 35px;
      width: 100%;
      height: 450px;
    }

    #hospedagem1 {
      float: left;
      
      width: 360px;
      height: 400px;
    }

    #hospedagem2 {
      float: left;
      margin-left: 30px;
      width: 360px;
      height: 400px;
    }

    #hospedagem3 {
      float: left;
      margin-left: 30px;
      width: 360px;
      height: 400px;
    }    

   #myCarousel,#hospedagem1,#hospedagem2,#hospedagem3 ul{
     list-style: none;
    }
 
   #myCarousel,#hospedagem1,#hospedagem2,#hospedagem3 ul li{
     float: left;
     display: inline; 
    }

    #myCarousel img{
      width: 900px;
      height: 600px;
     } 

     .anterior {
      float: left;
      margin-top: 300px;  

     
     }

     .proximo {
      float: right;
      margin-top: 300px; 
      margin-right: 125px;
    /*  position: top-right; */
     }

     .descricao {
      width: 100%;
      height: 50px;
      font-family: "arial black";
      text-align: center;
      margin-bottom: 5px;
     }

     .categorias {
       float: left;
       border-bottom: 35px;
       margin-top: 50px;
     }

 	</style>

 	
	

	<title>Meu Lazer.com</title>
</head>
<body>
  
  <div class="container">

   
    <?php
        require_once 'header.php';
    ?>

  	
  	<br><br><br>

   <div id="principal">

       <div class="anterior">
         <a href="#" class="prev"><img src="icons/prev.jpg" width="30" height="30"></a>
       </div> 

   	  <div id="banner-principal">
   	  

         <div id="myCarousel"> 


    

      
      

           <ul>

                <?php
                   include('model/DAO.php');

                   $busca = pg_query("SELECT * FROM anuncios");
 
                   while ($result = pg_fetch_array($busca)) {

                   $imagem = $result['nome'];   
                   $titulo = $result['titulo'];
                   $descricao = $result['descricao'];
       
                ?>

              <li> 
                <figure>
                  <img src="model/img/<?php echo $imagem; ?>" alt="olho de gato"/>
                    <div class="descricao">
                      <h3 class="text-primary"><?php echo "$titulo"; ?></h3>
                      <p class="text-primary"><?php echo "$descricao"; ?></p>
                    </div>            
               </figure>
              </li>
                <?php
                   }
                ?>  

           </ul>  
     
        </div>
      </div>

  
       <div class="proximo">
         <a href="#" class="next"><img src="icons/next.jpg" width="30" height="30"></a>
       </div>
    </div>   


   <div class="categorias">
       <h2 class="text-primary"><i>Hospedagem</i></h2>
       <span class="text-primary">______________________________________</span>
   </div>


   <div id="hospedagens">

      

     <div id="hospedagem1">
     
        <ul>
       
          <?php
                   include('model/DAO.php');

                   $busca = pg_query("SELECT * FROM anuncios");
 
                   while ($result = pg_fetch_array($busca)) {

                   $imagem = $result['nome'];   
                   $titulo = $result['titulo'];
                   $descricao = $result['descricao'];
       
          ?>


            <li>
              <figure>
                  <img src="model/img/<?php echo $imagem; ?>" alt="olho de gato" width="350" height="300"/>
                    <div class="descricao">
                      <h3 class="text-primary"><?php echo "$titulo"; ?></h3>                      
                    </div>            
              </figure>
            </li>

            <?php
                }
            ?>  
        </ul>

     </div>


     <div id="hospedagem2">
     
        <ul>
       
          <?php
                   include('model/DAO.php');

                   $busca = pg_query("SELECT * FROM anuncios");
 
                   while ($result = pg_fetch_array($busca)) {

                   $imagem = $result['nome'];   
                   $titulo = $result['titulo'];
                   $descricao = $result['descricao'];
       
          ?>


            <li>
              <figure>
                  <img src="model/img/<?php echo $imagem; ?>" alt="olho de gato" width="350" height="300"/>
                    <div class="descricao">
                      <h3 class="text-primary"><?php echo "$titulo"; ?></h3>                      
                    </div>            
              </figure>
            </li>

            <?php
                }
            ?>  
        </ul>

     </div>


     <div id="hospedagem3">
     
        <ul>
       
          <?php
                   include('model/DAO.php');

                   $busca = pg_query("SELECT * FROM anuncios");
 
                   while ($result = pg_fetch_array($busca)) {

                   $imagem = $result['nome'];   
                   $titulo = $result['titulo'];
                   $descricao = $result['descricao'];
       
          ?>


            <li>
              <figure>
                  <img src="model/img/<?php echo $imagem; ?>" alt="olho de gato" width="350" height="300"/>
                    <div class="descricao">
                      <h3 class="text-primary"><?php echo "$titulo"; ?></h3>                      
                    </div>            
              </figure>
            </li>

            <?php
                }
            ?>  
        </ul>

     </div>     

   </div>

 </div>


 

</body>
</html>