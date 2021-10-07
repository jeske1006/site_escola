<?php

require './classes/Merenda.php';

if (isset ($_GET ['codmer'])){
    if (is_numeric($_GET ['codmer'])) {
    $merenda = new Merenda();
    $merenda->eliminar($_GET ['codmer']);
    }
}

header("Location: merendaCadastrada.php");
exit();


?>