<?php
// Calcular e exibir na tela a sequência de Fibonacci até o número  233. 
# Implementação da Série de Fibonacci em PHP
function fibonacci ($i) {
 if ($i < 2 )
      return $i;
   else 
      return fibonacci ($i - 1 ) + fibonacci($i - 2);
}
 for($i=0; $i <=13; $i++) {

    echo fibonacci ($i). " ";

} 

?>