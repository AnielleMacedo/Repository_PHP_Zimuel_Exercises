<?php 

//CHAMO O DATABASE
$dsn = 'mysql:dbname=portal;host=127.0.0.1';
$user = 'root';
$password = '';//senha root DEVE SER alterada P 1234 no mysql p poder aceitar no linux

try {
    $conn = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}

//$conn= new PDO("mysql:dbname=portal;host=localhost", "root","");

//obs p resolver o probl de codificacao do mysql com os aceentos primeiro passa o predefinito pra utf8_general_ci e logo depois pra latin1_general_ci
 ?>


