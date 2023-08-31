<?php
class ContaBancaria
{
    public $titular;
    public $saldo;
    public $numeroConta;

    public function depositar($valorDeposito)
    {
        $this->saldo = $this->saldo + $valorDeposito;
    }

    public function sacar($valorSacar)
    {
        if ($this->saldo >= $valorSacar) {
            $this->saldo = $this->saldo - $valorSacar;
            return "Sucesso!";
        } else {
            return "saldo insuficiente";
        }
    }

    public function imprimirSaldo()
    {
        echo $this->saldo;
    }
}
