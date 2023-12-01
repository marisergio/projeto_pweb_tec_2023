<?php

require_once 'modelo/dominio/Professor.php';
require_once 'modelo/dao/ProfessorDao.php';

$professorDao = new ProfessorDao();

$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : NULL;

if ($acao == NULL) {
    include 'pages/formProfessor.php';
} else if ($acao == "salvar") {
    $professor = new Professor();
    $professor->setNome($_POST['nome']);
    $professor->setNascimento($_POST['nascimento']);
    $professor->setSexo($_POST['sexo']);
    $professor->setFormacao($_POST['formacao']);


    $professorDao->salvar($professor);

    header("Location: ?page=professorControle&acao=listar");
} else if ($acao == "listar") {
    $professores = $professorDao->listar();
    include 'pages/listarProfessor.php';
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
