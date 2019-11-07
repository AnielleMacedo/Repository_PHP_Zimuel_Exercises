<?php 
//chiamo la conessione db nessa ordem e ambaixo faz o form
require './db/conexao.php';

$message = '';


//como usei o required no form n precisa verificar se todos campos sao empty basta o isset do botao login
if (isset($_POST['login-but'])) {

    //controle pwd inserida pelo utente
  $password= $_POST['password'];
  $confirm_password= $_POST['confirm_password'];

  if ($password != $confirm_password) {
    $message = "Password don't match. Please type again.";
  } 
  else{
    $sql = "INSERT INTO login (name, username, email, password) VALUES (:name, :username, :email, :password)";
    $stmt = $conn->prepare($sql);

    $name_cap = strtoupper($_POST['name']);
    $stmt->bindParam(':name', $name_cap);

    $username_cap = strtolower($_POST['username']); 
    $stmt->bindParam(':username',$username_cap);

    $pwd_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);//pwd criptata prima del invio
    $stmt->bindParam(':password', $pwd_hash);


    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {//se email valido de acordo com filter
      $email_lower = strtolower($_POST['email']);
    }
    /*else {
      $message = "Email address missing point or incomplete";
    }*/
    $stmt->bindParam(':email', $email_lower);
    
        //se tudo funciona quando faz o execute da query e pwds conferem se cria utente
    if ($stmt->execute()) {
      $message= "<p style='color:#01A9DB; font-family:lato;font-weight: 300;font-size: 18px;text-align:center;padding-bottom:10px;'> New user has been successfully created! You can login.</p>";
      clean_fields();
          //header("Location: register.php"); // n funciona pq me apaga a message
          //exit;
    } 


    else {
      $message = 'Email address missing point or incomplete! ';
    }    
  }
}

  //fazer um if com que quando atualizo a pagina a $message desapareca 
  /*if (condition) {
    header('Location: register.php', true, 302);
    exit;*/


    function clean_fields(){
      $_POST['name']= $_POST['username']= $_POST['email']= $_POST['password']=$_POST['confirm_password']='';
    }

    ?>


<!DOCTYPE html>
<html>
  <head>
    <title>Registration</title>
    <!--aggiungo version 12 a href per aggiornare cache in browser chrome-->
    <link rel="stylesheet" href="style/style_register.css?version=12">
    <!--<link href='https://cdnjs.cloudflare.com/ajax/libs/css-social-buttons/1.2.0/css/zocial.css' type='text/css'>-->
  </head>
  <body>
    <?php //mostro a msg de sucesso do login declarada sopra
    if(!empty($message)): ?>
    <p id="msg-success" class="msg"><?= $message ?></p>
    <?php endif; ?>
    <div id="form-block">
      <div id="form-block--left">
        <div id="left-content" >
          <h1>Register your account</h1>
          <!--<button class="signup-button" title="Sign Up with Google +" name="button-g+"><b class="icon zocial-googleplus"></b><span>SIGN UP USING GOOGLE +</span></button>
          <button class="signup-button" title="Sign Up with Facebook" name="button-fb"><b class="icon zocial-facebook"></b><span>SIGN UP USING FACEBOOK</span></button>
          <button class="signup-button" title="Sign Up with Twitter" name="button-tw"><b class="icon zocial-twitter"></b><span>SIGN UP USING TWITTER</span></button>-->
          <form action="register.php" method="POST">
            <input name="name" type="text" placeholder="Name" value="<?php echo htmlentities(isset($_POST["name"]) ? $_POST["name"] : "");  ?>" required> <!--required torna il form fields obligat-->
            <input name="username" type="text" placeholder="Username" value="<?php echo htmlentities(isset($_POST["username"]) ? $_POST["username"] : "");  ?>" required>
            <input name="email" type="email" placeholder="Email Address" value="<?php echo htmlentities(isset($_POST["email"]) ? $_POST["email"] : "");  ?>" required>
            <input name="password" type="password" placeholder="Enter your Password" value="<?php echo htmlentities(isset($_POST["password"]) ? $_POST["password"] : "");  ?>" required>
            <input name="confirm_password" type="password" placeholder="Confirm your Password" value="<?php echo htmlentities(isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : ""); ?>" required>
            <input id="check-btn" class="login-button" type="submit" value="Register" name="login-but">
            <!--<button class="login-button">Register</button>-->
          </form>
        </div>
        <div class="bottom-account">Already have an account?<a class="email-link" href="login.php" title="Sign in by credentials">Login&#8594;</a></div>
      </div>
      <!--div da imagem-->
      <div id="form-block--right"><img src="images/cloud10.jpg" style="background-size: cover"></div>
      <!--<div id="form-block--right"><img src="https://wallpaperbro.com/img/199719.jpg"/></div>-->
    </div>
  </body>
</html>