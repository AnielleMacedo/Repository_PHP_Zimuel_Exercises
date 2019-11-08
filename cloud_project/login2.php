<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="./style/style_login2.css">

<!--  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">-->

</head>
<body>

<div class="containerlogin">
  <div id="header">
    <div id="cloud-head"><h1>Cloud Project</h1></div>
  </div>

  <form name="LoginForm" class="account_form" method="" action="">
    <div class="group">
      <input type="text" name="username" id="username" required>
      <!--<span class="highlight"></span>-->
      <span class="line"></span>
      <label>Username</label>
    </div>
    <div class="group">
      <input type="password" name="password" id="password" autocomplete="off" required>
      <!--<span class="highlight"></span>-->
      <span class="line"></span>
      <label>Password</label>
    </div>
    <button type="submit" name="login" class="submit">Login</button>
  </form>
  <div id="footer">
    <p>Not a member? <a href="register.php" class="register">Register</a></p>
  </div>
</div>

  
</body>
</html>