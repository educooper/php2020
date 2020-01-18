<?php

//40. CONCEITOS DE PROGRAMAÇÃO ORIENTADA A OBJETOS

/*
CLASSES são assuntos categorias para organizar o codigo
Atributo é semelhante a variavel só que com recurso a mais
Método é uma função que ganha mais recursos
Objeto é uma variavel que representa uma classe - instancia

*/


//41. CRIANDO UMA CLASSE
/*
Atributo fora do método escreve normal
usa-se sempre $this-> dentro do metodo que faz papel do $
variavel interna do php
*/
class Pessoa {

    public $nome;//Atributo

    public function falar(){//Metodo

        return "O meu nome é ".$this->nome;//Instancia        
    
    }

}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();

?>