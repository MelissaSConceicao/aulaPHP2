<?php<//tipo do documento

require_once("Pessoa.class.php");

$pessoa = new Pessoa();//Instanciando o objeto da classe
$pessoa->setNome("Jeferson Roberto de Lima");//objeto chamando a variável da classe Pessoa; alterando o valor da variavel para "Jeferson Roberto de Lima"
echo $pessoa->getNome();//imprimindo a variável através do "echo" e puxando a variável pelo método get

?>//fim do doctumento