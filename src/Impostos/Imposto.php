<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

abstract class Imposto
{
    private ?Imposto $outroImposto;

    /**
     * Imposto constructor.
     * @param Imposto $outroImposto
     */
    public function __construct(Imposto $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }

    abstract protected function realizaCalculoEspecifico(Orcamento $orcamento): float;

    public function calculaImposto(Orcamento $orcamento)
    {
        return $this->realizaCalculoEspecifico() + $this->realizaCalculoDeOutroImposto($orcamento);
    }

    private function realizaCalculoDeOutroImposto(Orcamento $orcamento)
    {
        return $this->outroImposto === null ? 0 : $this->outroImposto->calculaImposto($orcamento);
    }
}