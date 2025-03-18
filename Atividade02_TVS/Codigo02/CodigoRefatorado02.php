<?php

session_start();

if (!isset($_SESSION['nomeProdutos'])) {
	$home = "http://localhost/produtos-04.php";
	header('Location: '.$home);

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$produto = $_POST["produto"];
	$_SESSION['nomeProdutos'][] = $produto;
	
}

$home = "http://localhost/produtos-04.php";
header('Location: '.$home);

?>