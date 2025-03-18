<!DOCTYPE html>
<html lang="pt-br">
    <head>
         <title>Produtos em PHP</title>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>   
    <body>

         <div class="container">
	





 <?php
// Iniciar ou retomar uma sessão
session_start();

// Verificar se existe um array de entradas na sessão
if (!isset($_SESSION['nomeProdutos'])) {
    // Se não existir, inicializar um novo array
    $_SESSION['nomeProdutos'] = array("Arroz", "Carne", "Leite", "Macarrao");
}
  
		define("QTD_PRODUTOS", 10, true);
		//include "dados-produtos-04.php";
              	$titulo = 'produtos';
             
		?>
              <h1>Página de <?php echo $titulo; ?></h1>
              <p>Lista de <?php echo $titulo; ?></p>
              <ul class="list-group">
              <?php
 		/*for($i = 0; $i < QTD_PRODUTOS; $i++){
                      echo '<li class="list-group-item">Produto '. $i .' - '. $_SESSION[nomeProdutos][$i] .'</li>';
       		} */
foreach ($_SESSION['nomeProdutos'] as $produtos) {
        echo "Produto: " . $produtos . "<br>";

    }


              ?>
              </ul>
         </div>

	<?php

	/*
	* codigo para implementar um form para incluir um produto
	*/
	
	if(isset($_POST['submit'])) 
	{ 
		array_push($nomeProdutos, $_POST['produto']);
		
	}
	?>


	 <form action="cadastraProdutos-04.php" method="post">
            <p> Produto: <input type="text" name="produto"/> </p>
            <p> <input type="submit" value="Enviar"/> </p>
        </form>



    </body>
</html>