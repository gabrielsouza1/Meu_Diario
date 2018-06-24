<?php

require_once '../config/config.php';

//verifica se veio da pagina salvar ou excluir
if (isset($_POST['salvar'])) {
    //verifica se é inclusão ou alteração

        $acontecimentos = $_POST['acontecimentos'];

        $sql = "INSERT INTO acontecimentos (acontecimentos) VALUES ('$acontecimentos')";
        
        $ret = mysqli_query($con, $sql);

  }      //verifica se deu certo a inclusão
          //verifica se deu certo a inclusão
        if ($ret) {
            header('Location: ../acontecimentos.php');
        } else {
            //echo mysqli_error($con);
            header('Location: ../acontecimentos.php?erro=salvar');
        }
?>