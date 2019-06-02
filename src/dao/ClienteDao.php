<?php

require_once '../model/Cliente.class.php';
require_once '../model/Endereco.class.php';
require_once '../dao/EnderecoDao.php';
require_once '../conexao/Conexao.inc.php';

class ClienteDao
{

    private $conn;

    /**
     * ClienteDao constructor.
     */
    public function __construct()
    {
        $c = new Conexao();
        $this->conn = $c->getConexao();
    }


    private function toObject($obj)
    {
        $cliente = new Cliente();
        $dao = new EnderecoDao();

        $cliente->setId($obj->idCliente);
        $cliente->setNome($obj->nome);
        $cliente->setCpf($obj->cpf);
        $cliente->setDataNascimento($obj->dataNascimento);
        $cliente->setTelefone($obj->telefone);
        $cliente->setEmail($obj->email);
        $cliente->setSenha($obj->senha);

        $cliente->setEndereco($dao->get($cliente->getId()));

        return $cliente;
    }

    public function get($id)
    {
        $sql = $this->conn->prepare("SELECT * FROM cliente WHERE idCliente = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        //essa linha pega o objeto retornado pelo pdo e manda pra função to object
        //a função toObject cria um objeto de Cliente a partir desse object
        //pra poupar tempo a função também acessa a dao de endereço e recupera o endereço do cliente
        return $this->toObject($sql->fetch(PDO::FETCH_OBJ));
    }

    public function getByNome($nome)
    {
        $sql = $this->conn->prepare("SELECT * FROM cliente WHERE nome LIKE :nome LIMIT 1");
        $sql->bindValue(':nome', $nome);
        $sql->execute();
        return $this->toObject($sql->fetch(PDO::FETCH_OBJ));
    }

    public function getList()
    {
        $result = $this->conn->query("SELECT * FROM cliente");
        $lista = array();
        while ($usuario = $result->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $this->toObject($usuario);
        }
        return $lista;
    }

    public function create(Cliente $entidade)
    {
        $sql = $this->conn->prepare("INSERT INTO  cliente ( nome , cpf, dataNascimento, telefone, email, senha )  
            values ( :nome , :cpf, :dataNascimento, :telefone, :email, :senha )");
        $sql->bindValue(':nome', $entidade->getNome());
        $sql->bindValue(':cpf', $entidade->getCpf());
        $sql->bindValue(':dataNascimento', $entidade->getDataNascimento());
        $sql->bindValue(':telefone', $entidade->getTelefone());
        $sql->bindValue(':email', $entidade->getEmail());
        $sql->bindValue(':senha', $entidade->getSenha());

        $dao = new EnderecoDao();

        $sql->execute();

        $dao->create($entidade->getEndereco(), $this->conn->lastInsertId());

    }

    public function update(Cliente $entidade)
    {
        $sql = $this->conn->prepare("UPDATE cliente SET nome = :nome , cpf= :cpf, dataNascimento = :dataNascimento, telefone = :telefone, email = :email, senha = :senha  WHERE idCliente = :id");
        $sql->bindValue(':nome', $entidade->getNome());
        $sql->bindValue(':cpf', $entidade->getCpf());
        $sql->bindValue(':dataNascimento', $entidade->getDataNascimento());
        $sql->bindValue(':telefone', $entidade->getTelefone());
        $sql->bindValue(':email', $entidade->getEmail());
        $sql->bindValue(':senha', $entidade->getSenha());
        $sql->bindValue(':senha', $entidade->getId());

        $sql->execute();

        $dao = new EnderecoDao();
        $dao->update($entidade->getEndereco());


    }

    public function remove(Cliente $id)
    {

        $dao = new EnderecoDao();
        $dao->remove($id);

        $sql = $this->conn->prepare("DELETE FROM  cliente WHERE idCliente = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

}
