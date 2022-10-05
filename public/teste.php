<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("classes/MovimentoFinanceiro.php");

$mov = new MovimentoFinanceiro();
$mov->setSaldo(10.99);

date_default_timezone_set('America/Sao_Paulo');
$date = date('d/m/Y h:i:s a', time());
$mov->setData($date);

echo ("<pre>");
var_dump($mov);
echo ($mov->getData());
echo ("<br>");
echo ($mov->getSaldo());
// $mov
