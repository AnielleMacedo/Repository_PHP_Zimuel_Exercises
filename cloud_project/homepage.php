<?php
//pagina welcome
session_start();

if(isset($_SESSION["username"]))
{
  echo '<h3>Welcome ' .$_SESSION["username"]. ' </h3>' .'<br>';
}else{
  header("location:login.php");//altrimente continuo na pagina login
}



?>
<!--ident html no sublime ctrl+alt+shift+f-->  
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Home</title>
  <link rel="stylesheet" href="style/style_home.css">
  <script src="script/script_home.js"></script>
</head>
<body>
  <!--MENU-->
  <div class="container-menu">
    <nav class="nav">
      <div class="padded">
        <ul>
          <li class="active"><a id="link1" class="nav-section1" href="#">Home</a></li>
          <li><a id="link2" class="nav-section2" href="#section2">Gallery</a></li>
          <li><a id="link3" class="nav-section3" href="#section3">Contact</a></li>
          <li><a href="logout.php" id="link4" class="nav-section4" href="#section4">Sign Out</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <!--HOME-->
  <article class="home">
    <h1 id="section1"></h1>
    <div id="container-image"><img src="images/cloud4.jpg"></div><br/>
  </article>
  <!--galeria fotos-->
  <article class="galeria">
    <h1 id="section2">Gallery</h1>
    <h4>Spazio per le images</h4>
    <br><br>
    <div class="container-gallery">
      <div class="gallery">
        <div class="gallery-item">
          <img class="gallery-image" src="images/rasmus_lerdof2.jpg">
        </div>
        <div class="gallery-item">
          <img class="gallery-image" src="images/car.jpg">
        </div>
        <div class="gallery-item">
          <img class="gallery-image" src="https://images.unsplash.com/photo-1506045412240-22980140a405?w=500&h=500&fit=crop">
        </div>
        <div class="gallery-item">
          <img class="gallery-image" src="images/turtle.jpg">
        </div>
        <div class="gallery-item">
          <img class="gallery-image" src="images/mountain.jpg">
        </div>
        <div class="gallery-item">
          <img class="gallery-image" src="images/galaxy2.gif">
        </div>
      </div>
    </div>
    <br/>
  </article>

  <!--CONTACT-->
  <article class="secao3">
    <h1 id="section3">Contact us</h1>
    <br/ >
    <br/ >
    <br/ >
    <br/ >
    <br/ >
    <br/ >
    <br/ >
    <br/ >
    <br/ >
    <br/ >
    <br/ >
    <br/ >
    <br/ >
    <br/ >
  </article>
</body>
</html>