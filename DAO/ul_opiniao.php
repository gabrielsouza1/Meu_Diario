<?php

require_once '../config/config.php';

//verifica se veio da pagina salvar ou excluir
if (isset($_POST['salvar'])) {
    //verifica se é inclusão ou alteração

        $gostou_site = $_POST['gostou_site'];
        $compartilha_amigo = $_POST['compartilha_amigo'];
        $foto_pessoas = $_POST['foto_pessoas'];
        $dugestao_projetos = $_POST['dugestao_projetos'];
        $opiniao = $_POST['opiniao'];

        $sql = "INSERT INTO `opniao` (`gostou_site`, `compartilha_amigo`, `foto_pessoas`, `dugestao_projetos`, `opiniao`) VALUES ('$gostou_site', '$compartilha_amigo', '$foto_pessoas', '$dugestao_projetos', '$opiniao')";
        
        $ret = mysqli_query($con, $sql);

  }      //verifica se deu certo a inclusão
          //verifica se deu certo a inclusão
        if ($ret) {
            header('Location: ../opiniao.php');
        } else {
            //echo mysqli_error($con);
            header('Location: ../opiniao.php?erro=salvar');
        }
?>