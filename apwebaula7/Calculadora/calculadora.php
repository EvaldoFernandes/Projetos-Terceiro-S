<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="alert alert-secondary" role="alert">
        <h1 align="center">Calculadora</h1>
    </div>
    <form action="resultado.php" method="post">
        <div class="mb-3">
            <label class="form-label">Primeiro Valor</label>
            <input type="number" class="form-control" name="valor1" placeholder="Digite aqui">
        </div>
        <div class="mb-3">
            <label class="form-label">Segundo Valor</label>
            <input type="number" class="form-control" name="valor2" placeholder="Digite aqui">
        </div>
        <label class="form-label">Escolha a operação</label>
        <br>
        <button type="submit" class="btn btn-primary" name="calcular" value="somar">+</button>
        <button type="submit" class="btn btn-primary" name="calcular" value="subtrair">-</button>
        <button type="submit" class="btn btn-primary" name="calcular" value="dividir">/</button>
        <button type="submit" class="btn btn-primary" name="calcular" value="multiplicar">*</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>