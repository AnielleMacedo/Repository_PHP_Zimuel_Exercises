<?php 


$dsn = 'mysql:dbname=portal;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $conn = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}





 ?>