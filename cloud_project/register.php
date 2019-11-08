<?php 
//session_start();

//chiamo la conessione db nessa ordem e embaixo faz o form
require './db/connection.php';

$message = '';


//se existe/pressionou botao login
if (isset($_POST['login-but'])) {


  //verifico se username esiste per evitare duplicate
  $qry = "SELECT * FROM login WHERE username='" .$_POST['username']."' ";
  //executo a query
  $result_user= $conn->prepare($qry);
  //se result_user for true e qtidade de rows achadas >0 è pq a qry conseguiu achar 1 user c mesmo nome no db
  $result_user->execute();
  if ($result_user->fetchColumn() > 0) { //se existir ou a coluna user ou email ou as 2?se quiser email faz outro if
    $message = "username";
  }


  //controle pwd inserida pelo utente
  elseif ($_POST['password'] !=  $_POST['confirm_password']) {
    $message = "password";
  }
  
  else{
    $sql = "INSERT INTO login (name, username, email, password) VALUES (:name, :username, :email, :password)";
    $stmt = $conn->prepare($sql);

    $name_cap = strtoupper(trim($_POST['name']));
    $stmt->bindParam(':name', $name_cap);

    $username_cap = strtolower(trim($_POST['username'])); 
    $stmt->bindParam(':username',$username_cap);

    $pwd_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);//pwd criptata prima del invio
    $stmt->bindParam(':password', $pwd_hash);


    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {//se email valido de acordo com filter
      $email_lower = strtolower($_POST['email']);
    }
    $stmt->bindParam(':email', $email_lower);//n sei como conseguiu pescar s en è global
    
    //se tudo funciona quando faz o execute da query e pwds conferem se cria utente
    if ($stmt->execute()) {
      $message = "success";
      clean_fields();
    } 


    else {
      $message = "error-email";
      //$message = 'Email address missing point or incomplete! ';
    }    
  }
}

if($message == "error-email"){
  $message = "Email address missing point or incomplete! ";  

}elseif ($message == "password") {
  $message= "Password don't match.Please type again.";


}elseif($message == "username"){
 $message= "This username or email already exists.Please choose another one.";

}elseif($message == "success"){
  $message= "<p style='color:#01A9DB; font-family:lato;font-weight: 300;font-size: 18px;text-align:center;padding-bottom:10px;'> New user has been successfully created! You can login.</p>";
       //unset($_POST['login-but']); N FUNCIONA
      //redirecionar p outra page n funciona como quero pq me apaga a message

}else {
       //header("Location: register.php"); 
      //Exit(); //optional
}

function clean_fields(){
  $_POST['name']= $_POST['username']= $_POST['email']= $_POST['password']=$_POST['confirm_password']='';
}



  //fazer um if com que quando atualizo a pagina a $message desapareca 
  // evitar o reiserimento de dados apos f5 DA PAGINA SUCESS REGISTRO:Tramite la sessione valorizzare una variabile stringa da passare con $_SESSION dopo l'esito positivo della INSERT da verificare poi all'ingresso della pagina.Se sara' presente la stringa significhera' che il dato e' gia' stato inserito.

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
    <link rel="stylesheet" href="./style/style_register.css?version=12">
  </head>
  <body>

    <?php //msg errore o success
    if(!empty($message)): ?>
      <p id="msg-success" class="msg"><?= $message ?></p>
    <?php endif; ?>
    
    <div id="form-block">
      <div id="form-block--left">
        <div id="left-content" >
          <h1>Register your account</h1>
         
          <form action="register.php" method="POST">
            <input name="name" type="text" placeholder="Name" value="<?php echo htmlentities(isset($_POST["name"]) ? $_POST["name"] : "");  ?>" required> <!--required torna il form fields obligat-->
            <input name="username" type="text" placeholder="Username" value="<?php echo htmlentities(isset($_POST["username"]) ? $_POST["username"] : "");  ?>" required>
            <input name="email" type="email" placeholder="Email Address" value="<?php echo htmlentities(isset($_POST["email"]) ? $_POST["email"] : "");  ?>" required>
            <input name="password" type="password" placeholder="Enter your Password" value="<?php echo htmlentities(isset($_POST["password"]) ? $_POST["password"] : "");  ?>" required>
            <input name="confirm_password" type="password" placeholder="Confirm your Password" value="<?php echo htmlentities(isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : ""); ?>" required>
            <input id="check-btn" class="login-button" type="submit" value="Register" name="login-but">
          </form>
        </div>
        <div class="bottom-account">Already have an account?<a class="email-link" href="login.php" title="Sign in by credentials">Login&#8594;</a></div>
      </div>
      <!--div da imagem-->
      <div id="form-block--right"><img src="./images/cloud10.jpg" style="background-size: cover"></div>
      
    </div>
  </body>
  </html>