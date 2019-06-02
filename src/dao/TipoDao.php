<?php
    require_once ('../conexao/Conexao.inc.php');
    require_once ('../model/Tipo.class.php');
    require_once ('../model/Servico.class.php');
    
    class TipoDao{
     
        private $conn;
        
        /**
         * Construtor TipoDao.
         */
        public function TipoDao(){
            $c = new Conexao();
            $this->conn = $c->getConexao();
        }
        
        /**
         * Get TipoDao por Id.
         */
        public function getTipoId($id){
            $sql = $this->conn->prepare("SELECT * FROM tipo WHERE idTipo = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();
            return $sql->fetch(PDO::FETCH_OBJ);
        }
        
        /**
         * Get TipoDao toda.
         */
        public function getTipo(){
            $sql = $this->conn->prepare("SELECT * FROM tipo");
            $lista = array();
                while ($tipo = $result->fetch(PDO::FETCH_OBJ)) {
                    $lista[] = $tipo;
                }
            return $lista;
        }
        
        /**
         * Cria um TipoDao.
         */
        public function criarTipo(Tipo $tipo){
            $sql = $this->conn->prepare("INSERT INTO tipo(nome, valor) VALUES (:nome, :valor)");
            $sql->bindValue(':nome', $tipo->getNome());
            $sql->bindValue(':valor', $tipo->getValor());
            $sql->execute();
        }
        
        /**
         * Atualiza um TipoDao.
         */
        public function atualizarTipo(Tipo $tipo) {
            $sql = $this->conn->prepare("UPDATE tipo SET nome = :nome, tipo = :tipo WHERE idTipo = :id");
            $sql->bindValue(':nome', $tipo->getNome());
            $sql->bindValue(':valor', $tipo->getValor());
            $sql->bindValue(':id', $tipo->getId());
            $sql->execute();            
        }
        
        /**
         * Remove um TipoDao.
         */
        public function removerTipo($id){
            $sql = $this->conn->prepare("DELETE FROM tipo WHERE idTipo = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();
        }
    }
?>
