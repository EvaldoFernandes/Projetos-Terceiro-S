<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <?php
error_reporting(0);
require('estrutura.class.php'); //referenciando o arquivo 
$fr = $_POST['txtfrase'];
?>
<form id="form1" name="form1" method="post" action="">
    <table width="843" border="0">
        <tr>
            Nome: <input type="text" name="txtfrase" id="txtfrase" /></td>
            <td><input type="submit" name="button" id="button" value="Enviar" /></td>
            <td>&nbsp;</td>
        </tr>
    </table>
</form>
<?php
$obj = new Mensagem; //instanciando o objeto
$obj->imprimir($fr); // usando o metodo
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>