
<!--OBS salvo o doc com forma de html mss noneio com extensao .php e abro no modo php -->

<!--Esercizio
Realizzare un controllo in PHP per una FORM di login (email, password). L'email deve essere un indirizzo
valido (sintassi) e la password deve essere di almeno 8 caratteri
Suggerimento: per la verica dell'email è possibile utilizzare la funzione filter_var()-->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tela de Login</title>
</head>
<body>
	<!--crio o form e em action coloco o nome do arquivo php o qual irei mandar os dados deste file.
	A variavel name è importante pois sera usada no codigo php p poder collegarsi-->
	<form action="login.php" method="POST" />
	User: <input type="text" name="email" />	
	Password: <input type="password" name="senha" />
	<!--crio um button que ira enviar oa dados-->
	<input type="submit" value="Enter" />
	</form>
</body>
</html>





















 