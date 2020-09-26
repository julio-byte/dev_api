<?php

class ContaBancaria
{
	private $banco;
	private $nomeTitular;
	private $numeroAgencia;
	private $numeroConta;
	private $saldo;

	public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
	{
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
		$this->saldo = $saldo;
	}

	public function obterSaldo()
	{
		return 'Seu saldo atual é: R$ '$this=>saldo;
	}

	public function depositar($valor)
	{
		$this->saldo += $valor;
		return 'Deposito de R$ ' .$valor. 'realizado!';
	}

	public function sacar($valor)
	{
		$this->saldo -= $valor;
		return 'Saque de R$ ' .$valor. 'realizado!';
	}
}

$conta = new ContaBancaria(
    'Banco Bradesco'//banco
	'Julio Cesar'//nomeTitular
	'1770'//numeroAgencia
	'34567-90'//numeroConta
	15000.00//saldo
);

echo $conta->obterSaldo();

echo PHP_EOL;

echo $conta->depositar(200.00);

echo PHP_EOL;

echo $conta->obterSaldo();

echo PHP_EOL;

echo $conta->sacar(400.00);

echo PHP_EOL;

echo $conta->obterSaldo();
