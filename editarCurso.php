<html>

<head>
    <meta charset="UTF-8">
    <title>Harvard</title>
    <link rel="shortcut icon" href="/img/Harv.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>



    <?php

    $redirecionar = true;

    if (isset($_GET['codcur'])) {
        if (is_numeric($_GET['codcur'])) {

            $redirecionar = false;

            require './classes/Curso.php';
            $cur = new Curso();



            if (isset($_POST['nomcur'])) {

                $cur->editar($_GET['codcur'], $_POST['nomcur'], $_POST['desccur']);
            }

            $curso = $cur->getCurso($_GET['codcur']);
        }
    }

    if ($redirecionar) {
        header("Location: editarCurso.php");
        exit();
    }

    ?>

    <?php if (isset($_POST['nomcur'])) { ?>
        <script>
            alert('Curso atualizado com sucesso!');
        </script>
    <?php } ?>

        <br>

    <form action="editarCurso.php?codcur=<?php echo $_GET['codcur']; ?>" method="post">
        <div class="row justify-content-center">

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <center>
                        <h5 class="card-title">Editar</h5>
                    </center>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nome:</label>
                            <input type="text" value="<?php echo $curso['nomcur']; ?>" name="nomcur" id="nomcur">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">descrição:</label>
                            <input type="text" value="<?php echo $curso['desccur']; ?>" name="desccur" id="desccur">
                        </div>
                    </div>
                </div>


                <div class="card-footer text-muted">
                    <center>
                        <button type="submit" class="btn btn-outline-dark">Enviar
                        </button>

                        <a href="cursoCadastrado.php" class="btn btn-outline-dark">
                            Voltar a tabela</a>
                    </center>
                </div>

            </div>

    
    </form>

    


</body>

</html>