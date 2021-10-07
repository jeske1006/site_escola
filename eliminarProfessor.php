<?php

require './classes/Professor.php';

if (isset ($_GET ['codprof'])){
    if (is_numeric($_GET ['codprof'])) {
    $professor = new Professor();
    $professor->eliminar($_GET ['codprof']);
    }
}

header("Location: professorCadastrado.php");
exit();


?>