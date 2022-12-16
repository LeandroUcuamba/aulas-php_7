<?php

$nome = "ola mundo";
var_dump($nome);

echo "<br><br>";

if(is_string($nome)):
	echo "e uma string";
else:
	echo "nao e uma string";
endif;
echo "<hr>";

/*****************************************/

$idade = 21;
var_dump($idade);

echo "<br><br>";

if(is_int($idade)):
	echo "e um inteiro";
else:
	echo "nao e um inteiro";
endif;
echo "<hr>";

/*****************************************/

$admin = true;
var_dump($admin);

echo "<br><br>";

if(is_bool($admin)):
	echo "e um booleano";
else:
	echo "nao e um booleano";
endif;
echo "<hr>";


/*****************************************/


$carro = array("Gol","Uno","Camaro",12,20.6,true);
var_dump($carro);

if(is_array($carro)):
	echo "e um array";
else:
	echo "nao e um array";
endif;
echo "<hr>";

/*****************************************/

// Object

class Cliente{

  public $nome;
  public function atribuirNome($nome){

  	   $this->$nome = $nome;
  }

}


$cliente = new Cliente();
$cliente-> atribuirNome("Leandro");
var_dump($cliente);