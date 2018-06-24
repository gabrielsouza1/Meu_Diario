<?php
require_once 'config/config.php';
$gostou_site = isset($_POST["gostou_sitee"]);
$compartilha_amigo = isset($_POST["compartilha_amio"]);
$foto_pessoas = isset($_POST["foto_pessoas"]);
$dugestao_projetos = isset($_POST["dugestao_projetos"]);
$opiniao = isset($_POST['opiniao']);
$sql = "INSERT INTO `opniao` (gostou_site, compartilha_amigo, foto_pessoas, dugestao_projetos, opiniao) VALUES ('$gostou_site', '$compartilha_amigo', '$foto_pessoas', '$dugestao_projetos', '$opiniao')";

?>
<form method="POST" action="#">
	<h1>Sua opnião é muito importante!</h1>
	<label>O que achou do site</label>
	<input type="" name="gosto_site">
	<label>Compartilharia para seus amigos o site</label>
	<input type="" name="compartilha_amigo">
	<label>Deveriamos por uma area para você postar suas fotos?</label>
	<input type="" name="foto_pessoas">
	<label>Deixe sua sugestão!</label>
	<textarea placeholder="Digite aqui" name="dugestao_projeto"></textarea>
</form>