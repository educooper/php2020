<?php
//51. NAMESPACE

namespace Cliente;

class Cadastro extends \Cadastro { //a barra invertida especifica para buscar parametros e funções no diretorio raiz

    public function registrarVenda(){
      
      echo "Foi registrada um venda para o cliente ".this->getNome();
      
    }
}

?>
