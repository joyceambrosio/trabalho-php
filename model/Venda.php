<?php

require_once "Cliente.php";
require_once "Servico.php";

class Venda
{

    private $id;
    private $valorTotal;
    private $quantidadeItens;
    private Cliente $cliente;
    private Servico $servico;

    /**
     * Venda constructor.
     * @param $valorTotal
     * @param $quantidadeItens
     * @param $cliente
     * @param $servico
     */
    public function __construct($valorTotal, $quantidadeItens, $cliente, $servico)
    {
        $this->valorTotal = $valorTotal;
        $this->quantidadeItens = $quantidadeItens;
        $this->cliente = $cliente;
        $this->servico = $servico;
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
    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    /**
     * @param mixed $valorTotal
     */
    public function setValorTotal($valorTotal): void
    {
        $this->valorTotal = $valorTotal;
    }

    /**
     * @return mixed
     */
    public function getQuantidadeItens()
    {
        return $this->quantidadeItens;
    }

    /**
     * @param mixed $quantidadeItens
     */
    public function setQuantidadeItens($quantidadeItens): void
    {
        $this->quantidadeItens = $quantidadeItens;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente($cliente): void
    {
        $this->cliente = $cliente;
    }

    /**
     * @return mixed
     */
    public function getServico()
    {
        return $this->servico;
    }

    /**
     * @param mixed $servico
     */
    public function setServico($servico): void
    {
        $this->servico = $servico;
    }


}