<?php

//45. ENCAPSULAMENTO

/*
Proteje e organiza acessos as informações da classe

*Quem pode ter acesso

Atributos e metodos da mesma classe
atributos e metodos das classes extendidas - HERANCA
Atributos e classes acessados por objetoss

protegida na mesma classe e classe extendida
private na emsma classe
*/

class Pessoa {
  
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48; //somente dentro da propria classse ou quem herda
    private $senha = "123456";//



    public function verDados(){

        echo $this->nome . "<br />";
        echo $this->idade . "<br />";
        echo $this->senha. "<br />";

    }
}

$objeto = new Pessoa();

//echo $objeto->nome . "<br />";
//echo $objeto->idade . "<br />";
//echo $objeto->senha . "<br />";


$objeto->verDados();

?>