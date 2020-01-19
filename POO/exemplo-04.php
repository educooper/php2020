<?php

//44. MÉTODOS MÁGICOS

/*
Métodos são chamados automaticamente sem se você veja. Metodo construtor que é executado automaticamente quando se cham-se new.

A regra é que o metodo construtor tenha o mesmo nome da classe

__construct

__destruct

2 _ marcam metodo construtor


*/

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a,$b,$c){

            $this->logradouro = $a;
            $this->numero = $b;
            $this->cidade = $c;

    }

    public function __destruct(){

        //var_dump("DESTRUIR");

    } 

    public function __toString(){

return $this->logradouro.", ".$this->numero.", ".$this->cidade;

    }

}

$meuEndereco = new Endereco("Rua Alfredo Roller", "25","São Paulo");

//var_dump($meuEndereco);

//unset($meuEndereco);

echo $meuEndereco;

?>