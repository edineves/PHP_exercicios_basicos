<?php
// Calcular e exibir na tela a sequência de Fibonacci até o número  233. 
$a =  5;
$b = 12;
$c =  7;
$d =  1;
$e = -9;
$f =  3;
$g =  4;

$valor = (++$a) + (++$b) - (--$c) - ($d--) + (++$e) - ($f--) + (++$g);
echo "O calculo eh igual a, $valor <br><br>";

echo "Abaixo os novos valores para as variaveis conforme Incremento/Decremento. <br> ";
echo "$a <br>";
echo "$b <br>";
echo "$c <br>";
echo "$d <br>";
echo "$e <br>";
echo "$f <br>";
echo "$g <br>"; 

?>