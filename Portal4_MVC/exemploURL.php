<pre>
<?php 
//diferenca entre url amigavel/friendly e query string
//querystring serve p passar informacoes via url
//urlamigavel captura as informacoes por um nome ou id sem usar os simbolos separados por /

//a variavel Get captura as inform. apos o ? passadas via url browser e mostra elas em 1 array associativo
//ex. ?nome=lucas&idade=7%20meses
$url = $_GET;

var_dump($url);

?>
</pre>