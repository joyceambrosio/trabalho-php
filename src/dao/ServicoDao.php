<?php
	
require_once('../model/Servico.class.php');
require_once('../conexao/Conexao.inc.php');

class ServicoDao
{
	private $conn;

	public function __construct()
	{
		$c = new Conexao();
		$this->conn = $c->getConexao();
	}

	//PEGAR SERVIÇO PELO ID

	public function get($id)
	{
		$sql = $this->conn->prepare("SELECT * FROM servicos WHERE idServico = :id");
		$sql->bindValue(':id', $id);
		$sql->execute();
		return $sql->fetch(PDO::FETCH_OBJ);
	}

	//listar serviços

	public function getList(){
		$rs = $this->conn->query("SELECT * FROM servicos");
		$lista = array();
		While($servico = $rs->fetch(PDO::FETCH_OBJ)){
			$lista[] = $servico;
		}
		return $lista;
	}


}

?>