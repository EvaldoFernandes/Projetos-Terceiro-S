<?php

class Calculo
{
    var $variavel;
    public function receber($valor1, $valor2)
    {
        $this->variavel = $valor1 + $valor2;
    }
    public function imprimir()
    { // método imprimir dados
        echo"
<div class='alert alert-primary' role='alert'>
 A  soma dos valores eh: $this->variavel
</div>";
    }

}
?>