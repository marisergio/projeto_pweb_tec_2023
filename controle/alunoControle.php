<?php

require_once 'modelo/dominio/Aluno.php';

$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : NULL;

if ($acao == NULL) {
    include 'pages/formAluno.php';
} else if ($acao == "salvar") {
    $aluno = new Aluno();
    $aluno->setNome($_POST['nome']);
    echo "salvando...";
} else if ($acao == "listar") {
    echo "listando...";
} else if ($acao == "alterar") {
    echo "alterando...";
} else if ($acao == "excluir") {
    echo "excluindo...";
}
