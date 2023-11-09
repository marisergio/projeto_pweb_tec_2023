<?php

require_once 'modelo/dominio/Aluno.php';
require_once 'modelo/dao/AlunoDao.php';

$alunoDao = new AlunoDao();

$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : NULL;

if ($acao == NULL) {
    include 'pages/formAluno.php';
} else if ($acao == "salvar") {
    $aluno = new Aluno();
    $aluno->setNome($_POST['nome']);
    $aluno->setNascimento($_POST['nascimento']);

    $alunoDao->salvar($aluno);

    header("Location: ?page=alunoControle&acao=listar");
} else if ($acao == "listar") {
    $alunos = $alunoDao->listar();
    include 'pages/listarAluno.php';
} else if ($acao == "alterar") {
    echo "alterando...";
} else if ($acao == "excluir") {
    echo "excluindo...";
}
