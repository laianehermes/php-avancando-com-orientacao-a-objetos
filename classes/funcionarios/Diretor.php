<?php

namespace classes\funcionarios;

use classes\abstratas\FuncionarioAutenticavel;

class Diretor extends FuncionarioAutenticavel {

    public function __construct($cpf, $salario)
    {
        $this->cpf = $cpf;
        $this->salario = $salario;
    }

    public function getBonificacao(){

        return $this->salario * 0.5;

    } 
}