<?php 

require_once("vendor/autoload.php");

// namespace
use Rain\Tpl;

// na config ele diz q precisa de uma pasta chamada templates/tpl e outra chamada cache entao criamos
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
   
);


Tpl::configure( $config );

// INSTANCIO O OBJETO e ele sabe onde esta pq usamos o namespace acima
$tpl = new Tpl;


// assegno a variable e chamo elas no index.html
$tpl->assign( "name", "Lucas Armitano" );
$tpl->assign( "version", PHP_VERSION );

// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );

// chamo o template atraves do metodo draw, e aki ele precisa do nome do nosso arquivo
$tpl->draw( "index" ); //n precisa botar extensao html

 ?>