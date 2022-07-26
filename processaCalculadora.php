<?php
$n1=$_GET["n1"];
$n2=$_GET["n2"];
$resultado=$_GET["resultado"];

$soma=$n1+$n2;
$sub= $n1-$n2;
$mult= $n1*$n2;
$div= $n1/$n2;



if($soma=="soma")
    $soma = $n1 + $n2;

elseif($op=="subtracao")
    $sub= $n1 - $n2;


elseif($op=="multiplicacao")
    $mult = $n1*$n2;


else
    $z = $n1/$n2;

echo "O resultado é: $resultado";




?>
