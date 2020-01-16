<?php

//34. NOVIDADES EM FUNÇÕES EM PHP7

  function soma(int ...$valores){ //pega todos os parametros de um array de uma vez só
  // DECLARAÇÃO DE TIPOS ESCALARES
      
      return array_sum($valores); // arrray especial que soma os parametros
  
  }
  
echo soma(2, 2);
  echp "<br />";
echo soma(25, 33);
  echp "<br />";
echo soma(1.5, 3.2);
  echp "<br />";
?>
