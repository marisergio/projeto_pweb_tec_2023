<?php

require_once 'util/configConexao.php';

class GenericDao{

    public $conexao;

    public function __construct(){
        $this->conexao = ConfigConexao::getConexao();
    }

}