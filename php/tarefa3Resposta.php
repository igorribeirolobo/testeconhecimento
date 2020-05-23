<?php

require_once 'tarefa3.php';

$produtos = new tarefa3();

$produtos->setValor1(2);
$produtos->setValor2(2);
$produtos->setValor3(2);

echo $produtos->multiplicaPropriedade();