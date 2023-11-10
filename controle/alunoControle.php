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
   
    $aluno = new Aluno();
    $aluno->setId($_POST['id']);
    $aluno->setNome($_POST['nome']);
    $alunoDao->atualizar($aluno);

    header("Location: ?page=alunoControle&acao=listar");
    
} else if ($acao == "excluir") {
    $id = $_GET['id'];
    $alunoDao->deletar($id);
    header("Location: ?page=alunoControle&acao=listar");
}else if($acao == "get"){
    $id = $_GET['id'];

    $aluno = $alunoDao->get($id);
    include 'pages/formAluno.php';
}
