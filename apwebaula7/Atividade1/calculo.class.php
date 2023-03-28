<?php
class Calculo
{

    var $variavel;

    public function calcular($valor)
    {
        if ($valor < "1500") {
            $calc = $valor * 0.95;
        } else if ($valor >= "1500") {
            $calc = $valor * 0.89;
        }
        $this->variavel = $calc;
    }
    public function resultado()
    {

        echo "$this->variavel";
    }
}

?>