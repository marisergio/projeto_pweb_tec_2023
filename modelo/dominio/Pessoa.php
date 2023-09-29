<?php

class Pessoa
{
    private $id;
    private $nome;
    private $mae;
    private $sexo;
    private $nascimento;
    private $logradouro;
    private $numero;
    private $bairro;
    private $cep;
    private $telefone;
    private $cidade;

    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of mae
     */ 
    public function getMae()
    {
        return $this->mae;
    }

    /**
     * Set the value of mae
     *
     * @return  self
     */ 
    public function setMae($mae)
    {
        $this->mae = $mae;

        return $this;
    }

    /**
     * Get the value of sexo
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */ 
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }
}
