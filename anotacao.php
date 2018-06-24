<?php
include_once 'config/config.php';

$sql = "SELECT * FROM anotacao";
$query = mysqli_query($con, $sql);
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
			  <a href="galeria" class="list-group-item">Minhas fotos</a>

			</div>
 			</div>
 			<div class="col-md-9">
 				<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Escreva aqui
  </button>
  <!--modal-->
  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Anotacao</h4>
      </div>
      <div class="modal-body">
    <form class="form-horizontal" method="POST" action="DAO/ul_anotacao.php">
        <div class="form-group">
            <div class="col-sm-10">                
                       <textarea id="anotacao" name="anotacao" class="form-control" rows="5" placeholder="Quais são as anotações de hoje?"></textarea>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" id="salvar" name="salvar" class="btn btn-default">Salvar</button>

      </div>
    </div>
  </div>
</div>
  <br><br>
<?php
echo "<h2>Suas anotações</h2>";
while ($dados = mysqli_fetch_array($query)) {
?>
  <?=   $dados['anotacao'] ?><br><br>
<?php
}
?>
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
