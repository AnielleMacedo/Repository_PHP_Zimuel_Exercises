
<!--OBS salvo o doc com forma de html mss nomeio com extensao .php e abro no modo php -->

<!--Esercizio: Implementare un sito protetto con email e password
Il sito deve contenere almeno una pagina di login e una homepage con la scritta "Ciao <email>!" nel caso
in cui l'utente sia loggato. L'email e la password devono essere memorizzati in
un file.Suggerimento: memorizzate la password con la funzione password_hash() del PHP-->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tela de Login</title>
</head>
<body>
	<!--crio o form e em action coloco o nome do arquivo php o qual irei mandar os dados (loginCriptato).A variavel name è importante pois sera usada no codigo php p poder collegaarsi-->
	<form action="loginCriptato.php" method="POST" />
	User: <input type="text" name="email" />	
	Password: <input type="password" name="senha" />
	<!--crio um button que ira enviar oa dados-->
	<input type="submit" value="Enter" />
	</form>
</body>
</html>











