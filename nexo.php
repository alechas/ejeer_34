<?php

include_once("PHP/gestor.php");

$palabras1= Gestor::LeerCaracteres(1);
$palabras2= Gestor::LeerCaracteres(2);
$palabras3= Gestor::LeerCaracteres(3);
$palabras4= Gestor::LeerCaracteres(4);
$palabras0= Gestor::LeerCaracteres(0);

echo "Cantidad de palabras de 1 caracter $palabras1 <br>";
echo "Cantidad de palabras de 2 caracter $palabras2 <br>";
echo "Cantidad de palabras de 3 caracter $palabras3 <br>";
echo "Cantidad de palabras de 4 caracter $palabras4 <br>";
echo "Cantidad de palabras de más de 4 caracter $palabras0 <br>";


?>

