<?php

class AlunoDao
{

    public function salvar($aluno)
    {
        //  try {

        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "teste2";

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        $query = $conexao->prepare('INSERT INTO t2(nome) VALUES (:nome)');
        $query->bindParam(':nome', $aluno->getNome());
        $query->execute();

        //    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //  $conexao->exec('SET NAMES "utf8"');

        // } catch (Exception $e) {
        //    print $e->getMessage();
        //  exit();
        // }
    }

    public function listar()
    {
    }

    public function deletar($id)
    {
    }

    public function atualizar($aluno)
    {
    }
}
