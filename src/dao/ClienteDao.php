<?php


require_once('../model/Cliente.class.php');
require_once('../model/Endereco.class.php');
require_once('../conexao/Conexao.inc.php');

class ClienteDao
{

    private $conn;

    /**
     * UsuarioDao constructor.
     */
    public function __construct()
    {
        $c = new Conexao();
        $this->conn = $c->getConexao();
    }

    public function get($id)
    {
        $sql = $this->conn->prepare("SELECT * FROM cliente WHERE idCliente = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function getByNome($nome)
    {
        $sql = $this->conn->prepare("SELECT * FROM usuario WHERE usuario LIKE :nome LIMIT 1");
        $sql->bindValue(':nome', $nome);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function getList()
    {
        $result = $this->conn->query("SELECT * FROM usuario");
        $lista = array();
        while ($usuario = $result->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $usuario;
        }
        return $lista;
    }


    public function create(Usuario $entidade)
    {
        $sql = $this->conn->prepare("INSERT INTO  usuario ( nome ,  usuario ,  senha )  
            values (:nome , :usuario, :senha )");
        $sql->bindValue(':nome', $entidade->getNome());
        $sql->bindValue(':usuario', $entidade->getUsuario());
        $sql->bindValue(':senha', $entidade->getSenha());
        $sql->execute();
    }

    public function update(Usuario $entidade)
    {
        $sql = $this->conn->prepare("UPDATE usuario SET nome = :nome ,  usuario =:usuario,  senha =:senha WHERE idUsuario = :id");
        $sql->bindValue(':nome', $entidade->getNome());
        $sql->bindValue(':usuario', $entidade->getUsuario());
        $sql->bindValue(':senha', $entidade->getSenha());
        $sql->bindValue(':id', $entidade->getId());
        $sql->execute();
    }

    public function remove(IModel $id)
    {
        $sql = $this->conn->prepare("DELETE FROM  usuario WHERE idUsuario = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
}