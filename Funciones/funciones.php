<?php
    function suma($num1, $num2)
    {
        $num3 = $num1 + $num2;
        return $num3;
    }
    function raiz($num1, $num2){
        $raiz = $num1**(1/$num2);
        return $raiz;
    }
    function promedio($valores = array()){
        $aux = 0;
        $suma = 0;

        foreach($valores as $valor){
            $suma += $valor;
            $aux++;
        }

        $promedio = $suma/$aux;
        return $promedio;
    }
    function multi($num1, $num2){
        $producto = 0;
        for ($i=0; $i < $num2; $i++) { 
            $producto += $num1;
        }
        return $producto;
    }
?>