<?php

require_once 'modelo/dominio/Professor.php';
require_once 'modelo/dao/ProfessorDao.php';
require_once 'modelo/dominio/Curso.php';
require_once 'modelo/dominio/Filial.php';

require_once 'modelo/dominio/Turma.php';
require_once 'modelo/dao/TurmaDao.php';

$professorDao = new ProfessorDao();

$turmaDao = new TurmaDao();

$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : NULL;

if ($acao == NULL) {
    $professores = $professorDao->listar();
    include 'pages/formTurma.php';
} else if ($acao == "salvar") {
    $turma = new Turma();
    $curso = new Curso();
    $filial = new Filial();
    $professor = new Professor();

    $turma->dataInicio = $_POST['inicio'];
    $turma->dataFim = $_POST['fim'];
    $curso->id = 2;
    $filial->id = 1;
    $professor->setId($_POST['professor_id']);

    $turma->curso = $curso;
    $turma->filial = $filial;
    $turma->professor = $professor;


    $turmaDao->salvar($turma);

   // header("Location: ?page=turmaControle&acao=listar");
} else if ($acao == "listar") {
    $professores = $turmaDao->listar();
    include 'pages/listarTurma.php';
} else if ($acao == "alterar") {
   
    $professor = new Professor();
    $professor->setId($_POST['id']);
    $professor->setNome($_POST['nome']);
    $professor->setSexo($_POST['sexo']);
    $professor->setNascimento($_POST['nascimento']);
    $professor->setFormacao($_POST['formacao']);
    $professorDao->atualizar($professor);

    header("Location: ?page=professorControle&acao=listar");
    
} else if ($acao == "excluir") {
    $id = $_GET['id'];
    $professorDao->deletar($id);
    header("Location: ?page=professorControle&acao=listar");
}else if($acao == "get"){
    $id = $_GET['id'];

    $professor = $professorDao->get($id);
    include 'pages/formprofessor.php';
}else if($acao == "buscar"){
    
    $filtro = $_POST['filtro'];
    $professores = $professorDao->buscar($filtro);

    include 'pages/listarProfessor.php';

}
