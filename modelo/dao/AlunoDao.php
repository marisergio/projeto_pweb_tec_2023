<?php

class AlunoDao
{

    public function salvar($aluno)
    {
        //  try {

        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "curso";

        $nome = $aluno->getNome();
        $nascimento = $aluno->getNascimento();

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        $query = $conexao->prepare('INSERT INTO pessoa(nome,nascimento) VALUES (:nome, :nascimento)');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':nascimento', $nascimento);

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
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "curso";

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        $query = $conexao->prepare('SELECT nome, nascimento FROM pessoa');
        $query->execute();
        $alunos = $query->fetchAll(PDO::FETCH_CLASS);

        return $alunos;

    }

    public function deletar($id)
    {
    }

    public function atualizar($aluno)
    {
    }
}
