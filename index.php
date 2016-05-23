<?php

echo "<h1>Caminho</h1><hr/>";
echo "index => autoload<br/>";

require_once 'controller/ClienteController.php';

//$obj = new $classe();
//obj->listar();

$cliente = new Cliente();
$cliente->nome = "ricardo";
$cliente->id_nome = "";


$cliente->salvar($cliente);
$cliente->listar();

