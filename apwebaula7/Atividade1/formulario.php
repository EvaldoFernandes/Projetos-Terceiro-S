<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="alert alert-primary" role="alert">
        <h1 align="center">Calculo de INSS</h1>
    </div>
    <br>
    <form action="" method="post">
        <label class="form-label">Digite o seu Salário : </label>
        <input type="number" class="form-control" name="valor">
        <br>
        <br>
        <button type="submit" class="btn btn-success">Calcular</button>
    </form>
    <br>
    <br>
    <?php
    require('calculo.class.php');
    $val = @$_POST['valor'];
    $obj = new Calculo;
    $obj->calcular($val);

    echo "<div><label class='form-label'>Salário descontado : ", $obj->resultado(), " </label></div>";

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>