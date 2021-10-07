<?php

require './classes/Cliente.php';

if (isset ($_GET ['codcli'])){
    if (is_numeric($_GET ['codcli'])) {
    $cliente = new Cliente();
    $cliente->eliminar($_GET ['codcli']);
    }
}

header("Location: alunosCadastrados.php");
exit();


?>