<?php 

class ConfigConexao{

    public static function getConexao(){
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "curso";

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        return $conexao;
    }


}