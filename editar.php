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

    if (isset($_GET['codcli'])) {
        if (is_numeric($_GET['codcli'])) {

            $redirecionar = false;

            require './classes/Cliente.php';
            $cli = new Cliente();



            if (isset($_POST['nomcli'])) {

                $cli->editar($_GET['codcli'], $_POST['nomcli'], $_POST['desccli']);
            }

            $cliente = $cli->getCliente($_GET['codcli']);
        }
    }

    if ($redirecionar) {
        header("Location: index.php");
        exit();
    }

    ?>

    <?php if (isset($_POST['nomcli'])) { ?>
        <script>
            alert('Cliente atualizado com sucesso!');
        </script>
    <?php } ?>

        <br>

    <form action="editar.php?codcli=<?php echo $_GET['codcli']; ?>" method="post">
        <div class="row justify-content-center">

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <center>
                        <h5 class="card-title">Editar</h5>
                    </center>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nome:</label>
                            <input type="text" value="<?php echo $cliente['nomcli']; ?>" name="nomcli" id="nomcli">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">descrição:</label>
                            <input type="text" value="<?php echo $cliente['desccli']; ?>" name="desccli" id="desccli">
                        </div>
                    </div>
                </div>


                <div class="card-footer text-muted">
                    <center>
                        <button type="submit" class="btn btn-outline-dark">Enviar
                        </button>

                        <a href="alunosCadastrados.php" class="btn btn-outline-dark">
                            Voltar a tabela</a>
                    </center>
                </div>

            </div>

    
    </form>

    


</body>

</html>