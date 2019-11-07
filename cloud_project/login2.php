<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link rel="stylesheet" href="style/style_login2.css">
</head>
<body>


	<h1 class="F_title" >Cloud Project</h1>
	<h2 class="S_title">By Macedo Mason & Sartori</h2>
<div class="login-div">
<br><br>
<a  class="login-btn" data-toggle="modal" data-target="#pop_login">
  Go here!
</a>
</div>
<div class="modal" id="pop_login">
  <div class="modal-dialog ">
    <div class="modal-content bg-dark">

    	<!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form>
        <div class="input-div">
          <label class="ac_label" for="ac">Login:</label>
          <input id="ac" class="input-cell" type="text" placeholder="User ID" required></input></div>
        <div class="input-div">
          <label class="pw_label" for="pw">Password:</label>
        <input class="input-cell" id="pw"  type="password" placeholder="password" required></input>
      </div>
      <div class="w-100 text-right">
        <input type="submit" class="btn btn-dark" value="Login"/></div>
        </form>
      </div>


    </div>
  </div>
</div>

</body>
</html>