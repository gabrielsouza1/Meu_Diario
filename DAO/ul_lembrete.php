<?php

require_once '../config/config.php';

//verifica se veio da pagina salvar ou excluir
if (isset($_POST['salvar'])) {
    //verifica se é inclusão ou alteração

        $titulo = $_POST['titulo'];
        $titulo = $_POST['escreva'];

        $sql = "INSERT INTO lembrete (titulo, escreva) VALUES ('$titulo','$escreva')";
        
        $ret = mysqli_query($con, $sql);

  }      //verifica se deu certo a inclusão
  
?>