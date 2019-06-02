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

	//incluir serviço

	public function incluirServico(Servico $servico){
		$sql = $this->conn->prepare("INSERT INTO servico (nome, descricao, valor) values (:nom, :descr, :valor)");

		$sql->bindValue(':nom', $servico->getNome());
		$sql->bindValue(':descr', $servico->getDescricao());
		$sql->bindValue(':valor', $servico->getValor());
		$sql->execute();
	}


	//PEGAR SERVIÇO PELO ID

	public function get($id)
	{
		$sql = $this->conn->prepare("SELECT * FROM servico WHERE idServico = :id");
		$sql->bindValue(':id', $id);
		$sql->execute();
		return $sql->fetch(PDO::FETCH_OBJ);
	}



	//listar serviços

	public function getList(){
		$rs = $this->conn->query("SELECT * FROM servico");
		$lista = array();
		while($servico = $rs->fetch(PDO::FETCH_OBJ)){
			$lista[] = $servico;
		}
		return $lista;
	}

	//excluir serviço

	public function excluirServico($id){
		$sql = $this->conn->prepare("DELETE FROM servico WHERE idServico = :id");

		$sql->bindValue(":id", $id);
		$sql->execute();
	}

	//atualizar serviço

	public function atualizarServico(Servico $servico){
		$sql = $this->conn->prepare("UPDATE servico SET nome = :nome, descricao = :descr, valor = :valor, idTipo = :idTipo WHERE idServico = :id" );
		$sql->bindValue(':nome', $servico->getNome());
		$sql->bindValue(':descr', $servico->getDescricao());
		$sql->bindValue(':valor', $servico->getValor());
		$sql->bindValue(':idTipo', $servico->getTipo());
		$sql->execute();

	}
}

?>