<?php

class Matricula
{
    private $aluno;
    private $turma;

    public function __construct($aluno, $disciplina)
    {
        $this->aluno = $aluno;
        $this->turma = $disciplina;
    }
}
