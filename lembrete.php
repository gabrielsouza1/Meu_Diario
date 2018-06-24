<?php
include_once 'config/config.php';


        $titulo = $_POST['titulo'];
        $escreve = $_POST['escreve'];
  

        $sql = "INSERT INTO lembrete (titulo, escreva) VALUES ('$titulo', '$escreva')";
        
        $ret = mysqli_query($con, $sql);

        //verifica se deu certo a inclusão
        if ($ret) {
            header('Location: lembrete.php');
        } else {
            //echo mysqli_error($con);
            header('Location: lembrete.php?erro=salvar');
        }

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
          <a class="navbar-brand" href="#">Meu Diario</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
        <!--    <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li> -->
          </ul>
           <ul class="nav navbar-nav navbar-right">
	            <li class="active"><a href="#">Bem vindo</a></li>
	            <li><a href="#">Logout</a></li>
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
			  <a href="lembrete.php" class="list-group-item">Meus lembretes</a>
        <a href="acontecimentos.php" class="list-group-item">Acontecimentos</a>
			  <a href="opiniao.php" class="list-group-item">opiniao</a>
			  <a href="galeria.php" class="list-group-item">Minhas fotos</a>
			</div>
 			</div>
 			<div class="col-md-9">
       <form>
        <input type="text" name="titulo" placeholder="Titulo...">
        <input type="text" name="escreva" placeholder="Escreva...">
        <button type="submit" id="salvar" name="salvar" class="btn btn-primary btn-block">Salvar</button>
       </form>
 			</div>
 		</div>
 	</div>
 </section>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      </body>
</html>
