<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <form action="result.php" method="post">
  <div class="mb-3">
    <label class="form-label">Valor1 :</label>
<input type="number" class="form-control" name="v1">
  </div>
  <div class="mb-3">
    <label class="form-label">Valor2 :</label>
    <input type="number" class="form-control" name="v2">
  </div>
  <button type="submit" name="somar" class="btn btn-primary">+</button>
  <button type="submit" name="subtrair" class="btn btn-success">-</button>
  <button type="submit" name="multiplicar" class="btn btn-danger">*</button>
  <button type="submit" name="dividir" class="btn btn-warning">/</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>