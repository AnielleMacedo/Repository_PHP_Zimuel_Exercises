 
<!--OBS salvo o doc com forma de html mss nomeio com extensao .php e abro no modo php -->

<!--Esercizio
Creare una form per l'invio di file e una password.
Se la password non è la stringa "supersegreto" il file non
verrà memorizzato, restituendo un 401 Unauthorized-->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Memoriza file</title>
</head>
<body>
	
<!--em action coloco o nome do arquivo php o qual irei mandar os dados-->	
<form name="invio_file"
 action="invioFile.php" 
 method="POST"
 enctype="multipart/form-data">
 File: <input type="file" name="photo" />
 Password: <input type="password" name="senha" />
 <input type="submit" name="Invio" />
</form>
</body>
</html>













