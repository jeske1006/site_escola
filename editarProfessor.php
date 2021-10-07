<html>

<head>
    <meta charset="UTF-8">
    <title>Harvard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <?php

    $redirecionar = true;

    if (isset($_GET['codprof'])){
        if (is_numeric($_GET['codprof'])){

            $redirecionar = false;

    require './classes/Professor.php';
    $prof = new Professor();
    


    if (isset($_POST['nomprof'])) {

        $prof->editar($_GET['codprof'], $_POST['nomprof'], $_POST['descprof']);

    }

    $professor = $prof->getProfessor($_GET['codprof']);

    }
}

if ($redirecionar){
    header("Location: editarProfessor.php");
    exit();
}

    ?>

    <?php if (isset($_POST['nomprof'])) { ?>
        <script>
            alert('Professor atualizado com sucesso!');
        </script>
    <?php } ?>

    <form action="editarProfessor.php?codprof=<?php echo $_GET['codprof']; ?>" method="post">
    <div class="row justify-content-center">

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <center>
            <h5 class="card-title">Editar</h5>
        </center>
        <div class="col-md-4">
            <div class="form-group">

            <label for="exampleInputPassword1">Nome:</label>
            <input type="text" value="<?php echo $professor ['nomprof'];?>" name="nomprof" id="nomprof">
            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
            <label for="exampleInputPassword1">Descrição:</label>
            <input type="text" value="<?php echo $professor ['descprof'];?>" name="descprof" id="descprof">
            </div>
                    </div>
                </div>


                <div class="card-footer text-muted">
                    <center>
                        <button type="submit" class="btn btn-outline-dark">Enviar
                        </button>

                        <a href="professorCadastrado.php" class="btn btn-outline-dark">
                            Voltar a tabela</a>
                    </center>
                </div>

            </div>

    
    </form>

    


</body>

</html>