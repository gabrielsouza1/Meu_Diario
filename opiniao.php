<?php
include_once 'config/config.php';


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Meu Diario | Se sinta livre para se desafabar com as letras">
    <meta name="author" content="Meu Diario">
    <link rel="icon" href="../../favicon.ico">

    <title>Meu Diario</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">Meu Diario</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
        <!--    <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li> -->
          </ul>
           <ul class="nav navbar-nav navbar-right">
	            <li class="active"><a href="#">Bem vindo</a></li>
	            <li><a href="index.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1>Meu Diario</h1>
			</div>
		</div>
	</div>
</header>
 
 <section id="breadcrumb">
 	<div class="container">
 		<ol class="breadcrumb">
 			<li>Meu Diario</li>
 		</ol>
 	</div>
 </section>

 <section id="main">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-3">
 				<div class="list-group">
			  <a href="#" class="list-group-item active">
			    Menu
			  </a>
			  <a href="anotacao.php" class="list-group-item">Minhas anotações</a>
        <a href="acontecimentos.php" class="list-group-item">Acontecimentos</a>
			  <a href="opiniao.php" class="list-group-item">opiniao</a>
        <a href="galeria.php" class="list-group-item">Minhas fotos</a>
			</div>
 			</div>
 			<div class="col-md-9">
     <form action="DAO/ul_opiniao.php" method="post">
      <h1>Sua opinião é bem vinda para melhoria de nosso sistema!</h1>
      <div class="form-group">
       <label>Gostou do Site?</label>
       <input type="text" name="gostou_site"  class="form-control" placeholder="Escreva...">
     </div>
     <div class="form-group">
       <label>Compartilharia o site para seus amigos?</label>
       <input type="text" name="compartilha_amigo"  class="form-control" placeholder="Escreva...">
     </div>
     <div class="form-group">
       <label>Você gostaria de poder adicionar as suas fotos?</label>
       <input type="text" name="foto_pessoas"  class="form-control" placeholder="Escreva...">
      </div>
      <div class="form-group">
        <label>Sugestões</label><br>
      <textarea name="dugestao_projetos" placeholder="Escreva..." rows="10" style="height: 100px; width: 365px;"></textarea>
    </div>
      <div class="form-group">
       <label>Site deveria ter continuidade?</label>
       <input type="text" name="opiniao"  class="form-control" placeholder="Escreva...">
     </div>
      <button type="submit" id="salvar" name="salvar" class="btn btn-default">Salvar</button>
     </form>
 			</div>
 		</div>
 	</div>
 </section>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
