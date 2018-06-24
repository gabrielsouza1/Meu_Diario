<?php

require_once '../config/config.php';

//verifica se veio da pagina salvar ou excluir
if (isset($_POST['salvar'])) {
    //verifica se é inclusão ou alteração

        $anotacao = $_POST['anotacao'];

        $sql = "INSERT INTO `anotacao` (`anotacao`) VALUES ('$anotacao')";
        
        $ret = mysqli_query($con, $sql);

  }      //verifica se deu certo a inclusão
          //verifica se deu certo a inclusão
        if ($ret) {
            header('Location: ../anotacao.php');
        } else {
            //echo mysqli_error($con);
            header('Location: ../anotacao.php?erro=salvar');
        }
?>