<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="alert alert-warning" role="alert">
        <h1 align="center">Resultado</h1>
    </div>
    <br>
    <br>
    <br>
    <?php
    require('calculo.class.php');
    $n1 = @$_POST['valor1'];
    $n2 = @$_POST['valor2'];
    $calc = @$_POST['calcular'];

    $obj = new Calculo;
    $obj->calcular($n1, $n2, $calc);

    echo "<div class='alert alert-success' role='alert'><h1 align='center'>", $obj->resultado(), "</h1></div>";

    ?>
    <form action="calculadora.php">
        <div class="position-absolute top-50 start-50 translate-middle">
            <button type="" class="btn btn-danger">Voltar</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>