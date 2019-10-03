<?php 
//var_dump($_FILES);
//exit();



if (isset($_FILES['photo']['error']) && ($_POST['senha']) != "supersegreto") {
	//se la pwd non è "supersegreto" il file non verrà memorizzato, restituendo un 401 Unauthorized
    header("File non memorizzato, password non corrisponde ", true, 401);
	exit();
}

//se n fez upload do file mesmo com senha :
if ($_FILES['photo']['error'] != UPLOAD_ERR_OK) {
	header("Il file inviato non è valido", true, 400); //atencao que o header nao è um echo aparece so a pag de erro
	exit();
}

$path = "C:\\xampp\\htdocs\\Exercises_In_Class_ZIMUEL\\Form_Invio_File\\" . $_FILES['photo']['name'];

if (!move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
	header("Errore di sistema", true, 500);
	exit();
}

if (isset($_FILES['photo']['error']) && ($_POST['senha']) === "supersegreto") {
	echo "File inviato con successo!!!!"; //se quser q apareça faz um eco
	header("File inviato con successo", true, 200);  
}

?>