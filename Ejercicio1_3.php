<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define("saludo","Hola como estas</br> ");
define("numero",21);
//echo saludo;//muestra la informacion de la variable saludo
//echo numero;

//echo saludo.numero;//concatenacion
echo saludo."tengo ".numero." años";

$saludo2 = "</br>Hola ";
$saludo2 .="Como estas ";
$saludo2 .="joana";

echo $saludo2;
?>

