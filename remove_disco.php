<?php
    include "menu.php";
    require "src/discoDAO.php";
?>
<?php

    $id = $_GET['id'];
    $discoDAO = new discoDAO();
    $discoDAO->removerDisco($id);

    echo "Disco rmovido com sucesso";
?>
<?php
    include "rodape.php";
?>