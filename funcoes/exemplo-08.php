<?php

//34. NOVIDADES EM FUNÇÕES EM PHP7

  function soma(int ...$valores):string{ //pega todos os parametros de um array de uma vez só
  // DECLARAÇÃO DE TIPOS DE DADOS  : float retorna todo sem ponto flutuante
      
      return array_sum($valores); // arrray especial que soma os parametros
  
  }
  
echo soma(2, 2);
  echo "<br />";
echo soma(25, 33);
  echo "<br />";
echo soma(1.5, 3.2);
  echo "<br />";
?>
