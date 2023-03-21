<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    class Mensagem
    {
        var $msg; //Atributo
        function metodo_rcb_msg()
        { // metodo
            $this->msg = "boa noite"; //O $this faz o compartilhamento da variavel
            echo "$this->msg"; //acessando e imprimindo o conteudo da variavel
        }
    }
    ?>
</body>

</html>