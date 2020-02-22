<?php
$file = fopen("palavras.txt", "a+");

$busca = 

$frase = "A repetição é mãe da retensão.";

$acento = array(
      "á","à","ã","â","é","è","ê","í","ó","õ","ô","ù","ú","ç"
      );

function busca()

foreach ($word as $key => $value) {
      # code...
}
);

$q = strpos($frase, $palavra);

$texto = substr($frase, 0 , $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br />";

var_dump($texto2);

   $arquivo = strtolower(file_get_contents('palavras.txt'));
   $textoBuscar = strtolower($_POST['nome_do_input']);
   if(isset($_POST)) {
     if(strpos($arquivo, $textoBuscar) !== FALSE) {
       echo '<h1>Existe a palavra ' . $_POST['nome_do_input'] . ' no teste.txt</h1>';
     } else {
       echo '<h1>Não Existe a palavra ' . $_POST['nome_do_input'] . ' no teste.txt</h1>';
     }
   }
?>

<form method="POST">
  <input type="text" placeholder="Digite o que deseja consultar" />
  <input type="submit" value="Buscar" />
</form>