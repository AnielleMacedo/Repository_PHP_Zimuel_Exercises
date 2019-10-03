<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tela de Login</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<!--crio o form e em action coloco o nome do arquivo php o qual irei mandar os dados deste file.
	A variavel name è importante pois sera usada no codigo php p poder collegarsi-->
	<!--Essa pagina de login ser redirecionada a pag de boas vindas: welcome-->
	<div id="form1">
	<form action="welcome.php" method="POST">
	<p>
	Username: <input type="text" name="user" />
	</p>
	<p>	
	Password: <input type="password" name="pass" />
	</p>
	<!--crio um button que ira enviar oa dados-->
	<input type="submit" id= "btn" name= login value="Login" />
	</form>

	</div>
	
</body>
</html>
