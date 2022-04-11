<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include_once "connect.php";
        echo "<h1>Aplicação funcionando corretamente :D</h1>";
        if($msg_conn){
            echo "<h2 style='color:white; position:absolute; top:50vh'>".$msg_conn."</h2>";
        }
        
    ?>
</body>
</html>
