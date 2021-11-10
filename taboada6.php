<?php
// Faça a tabuada do 6 utilizando um Loop While() e o contador $n.

$numero = 0;

while ( $numero <= 60 ) {

    if ( $numero %6 ==0 ) {

        echo "$numero <br>";
    } 

    $numero++; 

}

echo " Fim do Processamento ";

?>