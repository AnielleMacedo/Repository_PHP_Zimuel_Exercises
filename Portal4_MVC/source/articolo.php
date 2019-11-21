<?php $this->layout('template/layout', ['title' => 'Portal Noticias Brasile']) ?>

<!--file standard onde todas as paginas qque abrirem seguirao esse modelo que pegaara as informacoes do database-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Articolo</title>
</head>
<body>
    <div class="email-header" style="background: #04B45F; padding: 30px;text-align: center;font-size: 30px; font-weight: bold">Portal Brasile</div>
        
 <!--funcaoa q chama o conteudo do template layout-->
<div style="font-size: 20px;font-family: Playfair Display, Times New Roman, serif; text-align: justify;padding: 25px; line-height: 180%">
<h2>pagina standard di articoli</h2>
<?= $this->e(print($article)) ?>
</div>


<?php 
 require('\..\index.php');//sem esse require nao aparece a homepage pq è o index que a renderiza
?>



</body>

</html>


 