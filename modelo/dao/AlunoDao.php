<?php

require_once 'util/configConexao.php';

class AlunoDao
{

    public function salvar($aluno)
    {
        //  try {

        $configConexao = new ConfigConexao();

        $nome = $aluno->getNome();
        $nascimento = $aluno->getNascimento();
        $sexo = $aluno->getSexo();

        $conexao = $configConexao->getConexao();

        $query = $conexao->prepare('INSERT INTO pessoa(nome,nascimento,sexo) VALUES (:nome, :nascimento,:sexo)');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':nascimento', $nascimento);
        $query->bindParam(':sexo', $sexo);

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
        $configConexao = new ConfigConexao();

        $conexao = $configConexao->getConexao();

        $query = $conexao->prepare('SELECT id, nome, nascimento, sexo FROM pessoa');
        $query->execute();
        $alunos = $query->fetchAll(PDO::FETCH_CLASS);

        return $alunos;

    }

    public function deletar($id)
    {
        $configConexao = new ConfigConexao();

        $conexao = $configConexao->getConexao();
        
        $query = $conexao->prepare('delete from pessoa where id=:id');
        $query->bindParam(':id', $id);
        $query->execute();
    }

    public function atualizar($aluno)
    {
        $configConexao = new ConfigConexao();

        $conexao = $configConexao->getConexao();

        $nome = $aluno->getNome();
        $nascimento = $aluno->getNascimento();
        $sexo = $aluno->getSexo();
        $id = $aluno->getId();

        
        $query = $conexao->prepare('update pessoa set nome=:nome, nascimento=:nascimento, sexo=:sexo where id=:id');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':id', $id);
        $query->bindParam(':sexo', $sexo);
        $query->bindParam(':nascimento', $nascimento);
        $query->execute();
        
    }

    public function get($id)
    {
        $configConexao = new ConfigConexao();

        $conexao = $configConexao->getConexao();

        $query = $conexao->prepare('SELECT id, nome, nascimento, sexo FROM pessoa WHERE id=:id');
        $query->bindParam(':id',$id);
        $query->execute();
        $alunos = $query->fetchAll(PDO::FETCH_CLASS);

        return $alunos[0];

    }

    public function buscar($filtro){
        $configConexao = new ConfigConexao();

        $conexao = $configConexao->getConexao();

        $filtro = "%".$filtro."%";

        $query = $conexao->prepare('SELECT id, nome, nascimento, sexo FROM pessoa WHERE nome like :filtro');
        $query->bindParam(':filtro',$filtro);
        $query->execute();
        $alunos = $query->fetchAll(PDO::FETCH_CLASS);

        return $alunos;
    }
}
