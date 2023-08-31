<?php

$acao = isset($_GET['acao']) ? $_GET['acao'] : NULL;

if ($acao == NULL) {
    include 'pages/formAluno.php';
} else if ($acao == "salvar") {
    echo "salvando...";
} else if ($acao == "listar") {
    echo "listando...";
} else if ($acao == "alterar") {
    echo "alterando...";
} else if ($acao == "excluir") {
    echo "excluindo...";
}
