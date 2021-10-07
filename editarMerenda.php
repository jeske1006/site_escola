<html>

<head>
    <meta charset="UTF-8">
    <title>Harvard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <?php

    $redirecionar = true;

    if (isset($_GET['codmer'])){
        if (is_numeric($_GET['codmer'])){

            $redirecionar = false;

    require './classes/Merenda.php';
    $mer = new Merenda();
    


    if (isset($_POST['nommer'])) {

        $mer->editar($_GET['codmer'], $_POST['nommer'], $_POST['descmer']);

    }

    $merenda = $mer->getMerenda($_GET['codmer']);

    }
}

if ($redirecionar){
    header("Location: editarMerenda.php");
    exit();
}

    ?>

    <?php if (isset($_POST['nommer'])) { ?>
        <script>
            alert('Merenda atualizado com sucesso!');
        </script>
    <?php } ?>

    <form action="editarMerenda.php?codmer=<?php echo $_GET['codmer']; ?>" method="post">
    <div class="row justify-content-center">

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <center>
            <h5 class="card-title">Editar</h5>
        </center>
        <div class="col-md-4">
            <div class="form-group">

            <label for="exampleInputPassword1">Nome:</label>
            <input type="text" value="<?php echo $merenda ['nommer'];?>" name="nommer" id="nommer">
            </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
            <label for="exampleInputPassword1">Descrição:</label>
            <input type="text" value="<?php echo $merenda ['descmer'];?>" name="descmer" id="descmer">
            </div>
                    </div>
                </div>


                <div class="card-footer text-muted">
                    <center>
                        <button type="submit" class="btn btn-outline-dark">Enviar
                        </button>

                        <a href="merendaCadastrada.php" class="btn btn-outline-dark">
                            Voltar a tabela</a>
                    </center>
                </div>

            </div>

    
    </form>

    


</body>

</html>