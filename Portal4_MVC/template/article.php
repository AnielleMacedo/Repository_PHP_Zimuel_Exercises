<?php 

error_reporting(E_ALL);
ini_set('display_errors',1);


//o autoload faz a a instancia e carreg de todas as classes q foram instaladas com o composer logo basta chamar ele no require apenas 1 vez
require './../vendor/autoload.php';

use League\Plates\Engine; 

//cria 1 estancia
$template = new Engine(__DIR__);  //NAO usar o composer versao plates 4.0.0 mas 3.0


    include('./../db/conexao.php');



    //codigo pra mostrar campos db
	$query = "SELECT id, data, titolo, testo FROM articolo where id=?";
	$stmt= $conn->prepare($query);
    $stmt->bindParam(1, $_GET['id']);//setei cada parametro do id no templat main
	$stmt->execute();
    $res= $stmt->fetch(PDO::FETCH_ASSOC);
    $result_field = "";
       	foreach ($res as $key => $value) {
    		$result_field .= "<strong>". $key .":</strong>&nbsp" .$value. "<br><br>";
    	}




    //codigo pra mostrar apenas as imagens do database em pagina html
    $query2 = "SELECT * FROM articolo WHERE id = ?"; 
    $stmt2= $conn->prepare($query2);
    $stmt2->bindParam(1, $_GET['id']);
    $stmt2->execute();
    $num= $stmt2->rowCount();
    //$result_image="";
    if ($num) {
        $row = $stmt2->fetch(PDO::FETCH_ASSOC);
        $result_image = "<hr><br>".'<img style="border: #BDBDBD Solid 4px;" height="500" width="900" src="data:image;base64,'.$row['image'].' ">  '; 
    }   
    
   
 
    //peco p renderizar a pag articolo
    echo $template->render('/../source/articolo', [
     'title' => 'Portal Brasile',
     'article' => $result_field . $result_image //. $result_image//se quero renderizar + coisas na mesma pagina, concateno
    ]);

















  //$result3= "";
    /*$query2 = "SELECT * FROM articolo"; 
    $stmt2= $conn->prepare($query2);
    $stmt2->execute();
    $num= $stmt2->rowCount();
    $result2="";
    if ($num) {
        $row = $stmt2->fetch(PDO::FETCH_ASSOC);
            $result2 = '<img height="500" width="900" src="data:image;base64, '.$row['image'].' ">  ';      
     }   */  
       
    