<?php


namespace Alura\DesignPattern;


class DadosExtrinsecosPedido
{
    private string $nomeCliente;
    private \DateTimeInterface $dataFinalizacao;

    /**
     * DadosExtrinsecosPedido constructor.
     * @param string $nomeCliente
     * @param \DateTimeInterface $dataFinalizacao
     */
    public function __construct(string $nomeCliente, \DateTimeInterface $dataFinalizacao)
    {
        $this->nomeCliente = $nomeCliente;
        $this->dataFinalizacao = $dataFinalizacao;
    }

    public function nomeCliente(): string
    {
        return $this->nomeCliente;
    }
}