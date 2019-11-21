<!--aki vai ter o conteudo da pagina que ira chamar o header e o footer-->
<html>
<head>
 <!--stampa o title dahomepage-->
 <title><?=$this->e($title)?></title>
</head>

<body>



<!--<div id="sidebar">-->
    <?php if ($this->section('sidebar')): ?>
        <?=$this->section('sidebar')?>
    <?php else: ?>
        <?=$this->fetch('default-sidebar')?>
    <?php endif ?>
<!--</div>-->




<!--insiro o template header no templ layout-->
<?php $this->insert('template/header') ?>


<!--insiro o template topnav no templ layout-->
<?php $this->insert('template/main') ?>

<!--content permite q apareca o conteudo da homepage e usa simbolo ? q significa echo-->
<?= $this->section('content')?>
<p>Your content.</p>


<!--insiro o template footer no templ layout-->
<?php $this->insert('template/footer') ?>

<!--<img src="imagens/noronha.jpg">-->
</body>
</html>