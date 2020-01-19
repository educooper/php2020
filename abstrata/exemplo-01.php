<?php

//49. CLASSE ABSTRATA

/*
CONTRATOS QUE ESTABELECEM METODOS E PARAMETROS DE PROGRAMACAO PARA O PROGRMAA

CLASSE ABSTRATA vai herdar so de uma classe abastrara mas 
Mas um CLASSE vai implementar várias Interfaces

*/

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
    
}

abstract class Automovel implements Veiculo {

    public function acelerar ($velocidade)
    {

        echo "O veiculo acelerou até " . $velocidade. " km/h";
        
    }
    public function frenar ($velocidade)
    {

        echo "O veiculo frenou até " . $velocidade. " km/h";
        
    }

    public function trocarMarcha($marcha){

        echo "O veiculo engatou a marcha ". $marcha;

    }
}


class DelRey extends Automovel{

    public function empurrar(){



    }

}

$carro = new DelRey();

$carro->acelerar(200);

?>