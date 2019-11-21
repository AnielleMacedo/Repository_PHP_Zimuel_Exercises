<?php 

error_reporting(E_ALL);
ini_set('display_errors',1);
//arquivo principal do projeto por onde todos o outros arquivos passarao, farei aki todos os carregamentos

//o autoload faz a a instancia e carreg de todas as classes q foram instaladas com o composer logo basta chamar ele no require apenas 1 vez
require 'vendor/autoload.php';

use League\Plates\Engine; //namespace

//cria 1 estancia
$template = new Engine(__DIR__);  //NAO usar o composer versao plates 4.0.0 mas 3.0



//devo fazer o codigo do db aki na pagina index e chamar template

	/*$conn= new PDO("mysql:dbname=portal;host=localhost", "root",""); //no linux pwd 1234

//se quiser selecionat todas tirar o where
	$query = "SELECT * FROM articolo where id= id";

	$stmt= $conn->prepare($query);
	
	$stmt->execute();
    $results= $stmt->fetch(PDO::FETCH_ASSOC);
    $res = "";
    /*foreach ($results as $row) {
    	foreach ($results as $key => $value) {
    		$res .= "<strong>&nbsp&nbsp&nbsp". $key .":</strong>&nbsp" .$value. "<br><br>";
    	}//se quiser tira a key p deixar so o valor do db

    	$res .= "<hr>";
    }*/
    
    //print_r($results);





//peco p renderizar a pag homepage c as variaveis)
echo $template->render('source/homepage', [
 'title' => 'Portal Brasile',
 'name' => 'Anielle',
]);



?>


