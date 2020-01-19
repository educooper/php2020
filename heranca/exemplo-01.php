<?php

//46. HERANÇA

/*

*/

class Documento {

    private $numero;

    public function getNumero()
    {

        return $this->numero;

    }

    public function setNumero($n){

        $this->numero = $n;
    }
}

class CPF extends Documento {

    public function validar():bool
    {

        $numeroCPF = $this->getNumero();

        //Validacao do CPF

        return true;
    }

}

$doc = new CPF();
$doc->setNumero("27261500801");
$doc->validar();


var_dump($doc->validar());

echo "<br />";

echo $doc->getNumero();

?>