<?php  echo"</p>Hola mundo</p>";
$integer =1;
$fload = 1.5;
$isTrue=true;
$arrayColors= array('azul','verde','amarillo','rojo');
$string="Hola";

echo $integer;
echo $fload;
//echo $isTrue;
if($isTrue){
echo $arrayColors[0];
echo $string;
echo 'verdadero';
}

function variablesGlobales(){
    $local ="soy la variable local";
    echo $GLOBALS["global"];
    echo$local;
    
}
$global="soy lavariable global";

variablesGlobales();
?>