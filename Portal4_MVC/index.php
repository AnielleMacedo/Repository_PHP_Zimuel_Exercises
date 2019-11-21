<?php 
//index recebe a requisicao get e joga pro core o qual vai decidir qual pagina controller ira abrir


//inves de fazer tanto require poderiamos usar o autoload  que faz isso em 1 linha
require_once('app/Core/Core.php'); //p encontrar a class Core
require_once('app/Controller/HomeController.php');
require_once('app/Controller/SobreController.php');
require_once('app/Controller/ErroController.php');
require_once('app/Model/Articolo.php');
require_once('lib/Database/Connection.php');
require_once 'vendor/autoload.php';


//carrego o file estrutura.html aki no index e exibo pro ususario
$template= file_get_contents('app/Template/estrutura.html');

ob_start();//inicia o ob_start

//faz leitura do q usuario esta acessando e carregando o respectivo controller
	$core = new Core();
	$core->start($_GET);
	$saida = ob_get_contents();//pega o conteudo do Core acima e armazena em saida

ob_clean();//encerra o ob_start

//var_dump($saida);

//procura a stringa dinamica e substitui o valor dela pelo conteudo de saida na parte da minha estrutura template
$tplReady = str_replace('{{area_dinamica q sera substituida ou pela home ou pag articolo}}', $saida, $template);

echo $tplReady; //exibe meu template estrutura


 ?>