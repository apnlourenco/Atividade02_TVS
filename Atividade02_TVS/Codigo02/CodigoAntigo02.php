<?php

session_start();

// Verificar se existe um array de entradas na sessão
if (!isset($_SESSION['nomeProdutos'])) {
    // Se não existir, redireciona
	$home = "http://localhost/produtos-04.php";
	header('Location: '.$home);

}

// Verificando se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$produto = $_POST["produto"];
	$_SESSION['nomeProdutos'][] = $produto;
	

	//include "dados-produtos-04.php";

	//var_dump($_SESSION['nomeProdutos']);

}

$home = "http://localhost/produtos-04.php";
header('Location: '.$home);

?>