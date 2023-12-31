<?php

require_once 'modelo/dao/GenericDao.php';

class ProfessorDao extends GenericDao
{

    public function salvar($professor)
    {
        //  try {

       

        $nome = $professor->getNome();
        $nascimento = $professor->getNascimento();
        $sexo = $professor->getSexo();
        $formacao = $professor->getFormacao();

        $query = $this->conexao->prepare('INSERT INTO pessoa(nome,nascimento,sexo) VALUES (:nome, :nascimento,:sexo)');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':nascimento', $nascimento);
        $query->bindParam(':sexo', $sexo);

        $query->execute();

        $idPessoa = $this->conexao->lastInsertId();

        $query = $this->conexao->prepare('INSERT INTO professor(id, formacao) VALUES (:id, :formacao)');
        $query->bindParam(':id', $idPessoa);
        $query->bindParam(':formacao', $formacao);

        $query->execute();

        //    $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //  $this->conexao->exec('SET NAMES "utf8"');

        // } catch (Exception $e) {
        //    print $e->getMessage();
        //  exit();
        // }
    }

    public function listar()
    {
        
        $query = $this->conexao->prepare('SELECT p.id, p.nome, p.nascimento, p.sexo, pr.formacao 
                                    FROM pessoa p INNER JOIN professor pr ON(p.id=pr.id)');
        $query->execute();
        $professores = $query->fetchAll(PDO::FETCH_CLASS);

        return $professores;

    }

    public function deletar($id)
    {
        
        $query = $this->conexao->prepare('delete from professor where id=:id');
        $query->bindParam(':id', $id);
        $query->execute();
        
        $query = $this->conexao->prepare('delete from pessoa where id=:id');
        $query->bindParam(':id', $id);
        $query->execute();
    }

    public function atualizar($professor)
    {
        
        $nome = $professor->getNome();
        $nascimento = $professor->getNascimento();
        $sexo = $professor->getSexo();
        $id = $professor->getId();
        $formacao = $professor->getFormacao();
        
        $query = $this->conexao->prepare('update pessoa set nome=:nome, nascimento=:nascimento, sexo=:sexo where id=:id');
        $query->bindParam(':nome', $nome);
        $query->bindParam(':id', $id);
        $query->bindParam(':sexo', $sexo);
        $query->bindParam(':nascimento', $nascimento);
        $query->execute();

        $query = $this->conexao->prepare('update professor set formacao=:formacao where id=:id');
        $query->bindParam(':formacao', $formacao);
        $query->execute();
        
    }

    public function get($id)
    {
        
        $query = $this->conexao->prepare('SELECT p.id, p.nome, p.nascimento, p.sexo, pr.formacao 
                                    FROM pessoa p INNER JOIN professor pr ON(p.id=pr.id)');
        $query->execute();
        $professores = $query->fetchAll(PDO::FETCH_CLASS);

        return $professores[0];

    }

    public function buscar($filtro){
        
        $filtro = "%".$filtro."%";

        $query = $this->conexao->prepare('SELECT p.id, p.nome, p.nascimento, p.sexo, pr.formacao 
                                    FROM pessoa p INNER JOIN professor pr ON(p.id=pr.id) 
                                    WHERE p.nome like :filtro');
        $query->bindParam(':filtro',$filtro);
        $query->execute();
        $professores = $query->fetchAll(PDO::FETCH_CLASS);

        return $professores;
    }
}
