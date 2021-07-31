<?php

$dias = ['lunes','martes','miercoles','jueves','sabado','domingo'];
echo '<h1>Dias de la semana</h1>';
foreach($dias as $dia){
    echo '<strong>'.$dia.'</strong><br>';
}

$meses = ['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
echo '<h1>Meses del año</h1>';
foreach($meses as $mes){
    echo '<strong>'.$mes.'</strong><br>';
}
?>