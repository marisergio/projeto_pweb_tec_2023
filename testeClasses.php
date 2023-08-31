<?php

include 'ContaBancaria.php';

$conta = new ContaBancaria();
$conta->titular  = $_POST['J'];
$conta->numeroConta = $_GET['numero'];
$conta->saldo = $_GET['saldo_inicial'];

echo "SALDO: ";
$conta->imprimirSaldo();
echo "<br/><br/>";

echo "DEPOSITANDO 30";
$conta->depositar(30);
echo "<br/><br/>";

echo "SALDO: ";
$conta->imprimirSaldo();
echo "<br/><br/>";

echo "DEPOSITANDO 10";
$conta->depositar(10);
echo "<br/><br/>";

echo "SALDO: ";
$conta->imprimirSaldo();
echo "<br/><br/>";

echo "SACANDO 15";
$mensagem = $conta->sacar(40);
echo "<br/>$mensagem<br/>";

echo "SALDO: ";
$conta->imprimirSaldo();
echo "<br/><br/>";
