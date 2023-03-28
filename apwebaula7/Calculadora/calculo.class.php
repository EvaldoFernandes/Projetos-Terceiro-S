<?php
class Calculo
{

    var $variavel;

    public function calcular($valor1, $valor2, $operador)
    {
        if ($operador == 'somar') {
            $resultado = $valor1 + $valor2;
        } else if ($operador == 'subtrair') {
            $resultado = $valor1 - $valor2;
        } else if ($operador == 'dividir') {
            $resultado = $valor1 / $valor2;
        } else if ($operador == 'multiplicar') {
            $resultado = $valor1 * $valor2;
        }
        $this->variavel = $resultado;
    }
    public function resultado()
    {
        echo "$this->variavel";
    }
}

?>