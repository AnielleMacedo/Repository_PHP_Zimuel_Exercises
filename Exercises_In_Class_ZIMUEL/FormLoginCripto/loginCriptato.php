<?php session_start(); ?>

<!--Per utilizzare la sessione è necessario richiamare la funzione session_start() all’inizio di uno script PHP
Una volta che la sessione è avviata è possibile memorizzare un dato scrivendo nell’array $_SESSION-->

<html>
<head>
	<title>
	 HOMEPAGE
	</title>

</head>
<body>

	
	<h1 style="text-align: center;"> BEM VINDO AO NOSSO SITE!</h1>

	<?php //echo $_SESSION['email'] ja coloquei la em cima

	//primeiro gera o hash dai salva no file o hash gerado que n vai ser mais em claro mas
	//depois n vai usar mais
	//gera senha criptografada toda vez q atualiza
	//$senha= '1234';
	//$senhaCripto= password_hash($senha, PASSWORD_DEFAULT);

   // echo password_verify($senha, $senhaCripto);

    //leio o file php
	$data = file_get_contents("info.txt"); //le o file
	$convert = explode(";", $data); //cria array separado por ;

	$senhaUser= $_POST['senha'];//1234
	

	//pq se coloco diretamente $convert[1] nao funciona?
	$senhaFile= '$2y$10$J.xbNNUA/hQjgv5UjwkBkOFLPUrEcsaR8ZHxqfwF4wM7lWEfmbR2S';//na senha file eu meto o hash escrito no file e cocm aspas simples
	
	echo password_verify($senhaUser, $senhaFile);
	
	//echo $senhaUser."<br>";
	//echo $senhaFile."<br>";
	//echo $convert[1]; e a segunda linha 1234

	if(($_POST['email']) == $convert[0] && (password_verify($senhaUser, $senhaFile))){
		echo '<h3> CIAO </h3>'. $convert[0];
	}
	else{
		echo "ERRORE!! Email ou senha Invalido";
	}

	echo "<hr>";
	
?>
</body>
</html>