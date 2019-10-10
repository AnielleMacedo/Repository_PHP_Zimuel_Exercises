<?php 

//arquivo principal do projeto por onde todos o outros arquivos passarao, farei aki todos os carregamentos

//o autoload faz a a instancia e carreg de todas as classes q foram instaladas com o composer logo basta chamar ele no require apenas 1 vez
require 'vendor/autoload.php';

echo "Ola mundo";
// use League\Plates\Engine; //namespace

// //cria 1 estancia
// $template = new Engine('/path/to/templates');  ?????????????

// //render o template
// echo $template->render('hello', [
//  'title' => 'Hello World!'
//  'name' => 'Alberto'
// ]);


 ?>
