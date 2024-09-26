<?php

include "Funcionario.php";

class Professor extends Funcionario
{
    var $disciplina;

    function __construct($n, $s, $d)
    {
        parent::__construct($n, $s);
        $this->disciplina = $d;
    }

    function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;
    }

    static function teste(){
        echo "Metodo de classe";
    }
}