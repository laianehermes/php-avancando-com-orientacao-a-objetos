<?php

ini_set("display_errors",1);
require_once "autoload.php";

use classes\funcionarios\Diretor;
use classes\funcionarios\Designer;
use classes\sistemaInterno\GerenciadorBonificacao;

$diretor = new Diretor("233.333.332.33", 50000.00);
$diretor->senha = "123456";

$gerenciador = new GerenciadorBonificacao();
$gerenciador->AutentiqueAqui($diretor,"123456");

$designer = new Designer("233.333.444.33");



$gerenciador->registrar($diretor);

var_dump($gerenciador->getTotalBonificacoes());

$gerenciador->registrar($designer);

echo "<pre>";
var_dump($diretor);
var_dump($designer);

?>