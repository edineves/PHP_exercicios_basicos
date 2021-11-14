<?php
// Calcular e exibir na tela a sequência de Fibonacci até o número  233. 
# Implementação da Série de Fibonacci em PHP

$soma=0; $fibonacci[0]= 1; $fibonacci[1]= 1; 

echo " Fibonacci de 0 a 233 = <br> ";

for ($a=1; $soma <= 233; $a ++) 
    {
    $soma = $fibonacci[$a] + $fibonacci[$a-1]; 
    $fibonacci[$a+1]=$soma;   
    echo $fibonacci[$a]. "<br>  ";
    }
?>