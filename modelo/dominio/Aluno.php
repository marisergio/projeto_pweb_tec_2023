<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa
{

    private $numeroMatricula;

    /**
     * Get the value of numeroMatricula
     */
    public function getNumeroMatricula()
    {
        return $this->numeroMatricula;
    }

    /**
     * Set the value of numeroMatricula
     *
     * @return  self
     */
    public function setNumeroMatricula($numeroMatricula)
    {
        $this->numeroMatricula = $numeroMatricula;

        return $this;
    }
}
