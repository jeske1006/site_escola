<?php

require './classes/Curso.php';

if (isset ($_GET ['codcur'])){
    if (is_numeric($_GET ['codcur'])) {
    $curso = new Curso();
    $curso->eliminar($_GET ['codcur']);
    }
}

header("Location: cursoCadastrado.php");
exit();


?>