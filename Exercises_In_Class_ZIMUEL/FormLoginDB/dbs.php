
<?php

$dsn = 'mysql:dbname=login;host=127.0.0.1';
$user = 'anielle';
$password = 'anielle';

try {
    $pdo = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}

//nao ta reconhecendo essas variaveis diz q è undeined
$email=$_POST["email"];
$password=$_POST["password"];

$sql = 'SELECT email, passwordp
FROM user';

$sth = $pdo->prepare($sql);
$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);

$emaildb = $result["email"];
$passdb = $result["passwordp"];


function email($email,$emaildb){
    if($email == $emaildb){
        return true;
    }
    return false;
}

function password($password,$passdb){

    return password_verify($password, $passdb);
    
}

if(email($email,$emaildb) == true && password($password,$passdb) == true)
    {
        header("ok",true,200);
        echo("ciao"." ".$emaildb);
    }
else 
    {
        header("Dati non corretti", true, 404);
        exit();
    }

  