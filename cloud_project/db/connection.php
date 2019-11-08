<?php
$dsn = 'mysql:dbname=cloud;host=localhost';
$username = 'root';
$password = '';//senha root 1234 in mysql di linux

try {
$conn = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
die('Connection failed: ' . $e->getMessage());
}
?>