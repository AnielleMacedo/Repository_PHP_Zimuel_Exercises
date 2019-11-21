<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!--<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">-->
    <title><?=$this->e($title)?></title>

    <!--copia todos os links da pagina de admin_login na pagina home link1-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library link2 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS link3 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript link4-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- link que indica o estilo css da pagina home lembre indicar a pasta-->
    <link href="style/home_style.css" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/blog/">

    <!-- elimina esse link q n precisa: Bootstrap core CSS 
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->

    

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    div{
     text-align: justify;
  
    }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

    
  </head>

  <!--parte do topo do cabecalho onde tem o nome portal brasile e o menu -->


    <div class="container">
  <header class="blog-header py-3" style="background-color: #04B45F">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <!--<a class="text-muted" href="#" style="color: black">Videos</a>-->
        
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Portal Brasile</a>
        <!--<p>11 Ottobre 2019</p>-->
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Cerca</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" style="color: grey; font-weight: bold; margin-right: 10px" href="admin_login.php">Log out</a>

      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="#">Mondo</a>
      <a class="p-2 text-muted" href="#">Tecnologia</a>
      <a class="p-2 text-muted" href="#">Design</a>
      <a class="p-2 text-muted" href="#">Cultura</a>
      <a class="p-2 text-muted" href="#">Scienze</a>
      <a class="p-2 text-muted" href="#">Benessere</a>
      <a class="p-2 text-muted" href="#">Economia</a>
      <a class="p-2 text-muted" href="#">Turismo</a>
      <a class="p-2 text-muted" href="#">Contatti</a>
    </nav>
  </div>