<?php

class MovimentoFinanceiro
{
    private $saldo;
    private $data;

    public function setSaldo($valor)
    {
        $this->saldo = $valor;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}
