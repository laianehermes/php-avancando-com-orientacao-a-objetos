<?php

namespace classes\abstratas;

abstract class Funcionario{

    public $nome;
    public $cpf;
    protected $salario;
    const piso = 980.00;

    public function __construct($cpf, $salario = self::piso)
    {
        $this->cpf = $cpf;
        $this->salario = $salario;        
    }

    abstract public function getBonificacao();

    final public function aumentarSalario()
    {
        $this->salario *= 1.3;
    }

    static function setPiso($valor){
        self::$piso = $valor;
    }

}
