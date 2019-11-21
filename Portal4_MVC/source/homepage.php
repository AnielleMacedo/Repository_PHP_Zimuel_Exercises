<html>
<head>
<!-- titulo aba do site -->
 <title><?= $title?></title>
</head>
<body>

<!--funcaoa q chama o conteudo do template layout-->
<?php $this->layout('template/layout', ['title' => 'Portal Noticias Brasile']) ?>

<h1>Hello <?= $name ?></h1>
 <h1>User Profile</h1>
 <!--inserir conteudo-->
 <p>Hello, <?= $this->e($name)?></p>


<?php $this->start('sidebar') ?>

<?php $this->stop() ?> 









 


</body>
</html>