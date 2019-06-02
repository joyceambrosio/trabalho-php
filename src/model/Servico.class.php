<?php

class Servico
{

    private $id;
    private $nome;
    private $descricao;
    private $valor;
    private $tipo;
    private $disponibilidade;

    /**
     * Servico constructor.
     * @param $nome
     * @param $descricao
     * @param $valor
     */
    public function __construct($nome, $descricao, $valor)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->disponibilidade = array();
    }

    /**
     * @param $disponibilidade disponibilidade a ser adicionada
     */
    public function addDisponibilidade(Disponibilidade $disponibilidade)
    {
        array_push($this->disponibilidade, $disponibilidade);
    }

    /**
     * @param $disponibilidade disponibilidade a ser removida
     * @
     */
    public function removeDisisponibilidade(Disponibilidade $disponibilidade)
    {
        array_pop($this->disponibilidade, $disponibilidade);
    }

    /**
     * @return array
     */
    public function getDisponibilidade(): array
    {
        return $this->disponibilidade;
    }

    /**
     * @param array $disponibilidade
     */
    public function setDisponibilidade(array $disponibilidade): void
    {
        $this->disponibilidade = $disponibilidade;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor): void
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }


}