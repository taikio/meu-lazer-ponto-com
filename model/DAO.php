<?php

  $host = 'localhost';
   $port = 5432;
   $database = 'meuLazer';

   $db_user = 'postgres';
   $db_password = '1532'; 
   
   $conn = pg_connect("host='$host' port='$port' dbname='$database' user='$db_user' password='$db_password'")
   		or die("Erro de conexão com o banco".pg_last_error()); 