<?php

class Conexao
{

    private $servidor_mysql = 'localhost';
    private $nome_banco = 'lojaservicos';
    private $usuario = 'root';
    private $senha = '';
    private $conn;

    public function getConexao()
    {
        $this->conn = new PDO("mysql:host=$this->servidor_mysql; dbname=$this->nome_banco", "$this->usuario", "$this->senha");
        $this->conn->exec("set names utf8");
        return $this->conn;
    }
}

?>
