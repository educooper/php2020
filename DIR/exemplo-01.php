<?php
//68. Lendo e manipulando diretorios e arquivos no php7
$name = "images";

if (!is_dir($name)) {

	mkdir($name);
	echo "Diretorio $name criado com sucesso";

	}else{

	echo "Já existe o diretório: $name";	
	
	}
	
?>