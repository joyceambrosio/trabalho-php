<?php

require_once('../model/Endereco.class.php');
require_once('../conexao/Conexao.inc.php');

class EnderecoDao
{

    private $conn;

    /**
     * EnderecoDao constructor.
     */
    public function __construct()
    {
        $c = new Conexao();
        $this->conn = $c->getConexao();
    }

    private function toObject($obj)
    {
        $endereco = new Endereco();

        $endereco->setId($obj->idEndereco);
        $endereco->setLogradouro($obj->logradouro);
        $endereco->setNumero($obj->numero);
        $endereco->setBairro($obj->bairro);
        $endereco->setCep($obj->bairro);
        $endereco->setCidade($obj->cidade);
        $endereco->setUf($obj->uf);

        return $endereco;
    }

    /**
     * @param $id do cliente a qual esse endereço pertence
     * @return endereco
     */
    public function get($id)
    {
        $sql = $this->conn->prepare("SELECT * FROM endereco WHERE idCliente = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        return $this->toObject($sql->fetch(PDO::FETCH_OBJ));
    }

    public function create(Endereco $entidade, $idCliente)
    {
        $sql = $this->conn->prepare("INSERT INTO  endereco ( idCliente ,  logradouro ,  numero ,  bairro ,  cep ,  cidade ,  uf ) 
                VALUES  (:idCliente ,  :logradouro ,  :numero ,  :bairro ,  :cep ,  :cidade ,  :uf )");

        $sql->bindValue(':idCliente', $idCliente);
        $sql->bindValue(':logradouro', $entidade->getLogradouro());
        $sql->bindValue(':numero', $entidade->getNumero());
        $sql->bindValue(':bairro', $entidade->getBairro());
        $sql->bindValue(':cep', $entidade->getCep());
        $sql->bindValue(':cidade', $entidade->getCidade());
        $sql->bindValue(':uf', $entidade->getUf());

        $sql->execute();


    }

    public function update(Endereco $entidade)
    {
        $sql = $this->conn->prepare("UPDATE endereco SET logradouro = :logradouro,  numero = :numero,  bairro = :bairro,  cep = :cep,  cidade = :cidade,  uf = :uf WHERE idEndereco = :id ");

        $sql->bindValue(':logradouro', $entidade->getLogradouro());
        $sql->bindValue(':numero', $entidade->getNumero());
        $sql->bindValue(':bairro', $entidade->getBairro());
        $sql->bindValue(':cep', $entidade->getCep());
        $sql->bindValue(':cidade', $entidade->getCidade());
        $sql->bindValue(':uf', $entidade->getUf());
        $sql->bindValue(':id', $entidade->getId());
        $sql->execute();
    }

    public function remove($id)
    {
        $sql = $this->conn->prepare("DELETE FROM  usuario WHERE idUsuario = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
}