<?php
  $conn = new mysqli("db", "root", "mypassword", "testedb");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  }else{
      $msg_conn = "Sucesso na conexão com banco de dados! (Acesse localhost:8080)";
  }


?>