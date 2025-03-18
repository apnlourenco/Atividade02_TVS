<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produtos em PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>   
<body>

         <div class="container">
            <?php
            session_start();
            if (!isset($_SESSION['nomeProdutos'])) {
                $_SESSION['nomeProdutos'] = array("Arroz", "Carne", "Leite", "Macarrao");
            }

            $titulo = 'produtos';
            ?>
              
            <h1>Página de <?php echo $titulo; ?></h1>
            <p>Lista de <?php echo $titulo; ?></p>

            <ul class="list-group"> 
                <?php foreach ($_SESSION['nomeProdutos'] as $produto): ?>
                    <li class="list-group-item">Produto: <?=htmlspecialchars($produto); ?> </li>
                <?php endforeach; ?>
            </ul>
            
            <form action="cadastraProdutos-04.php" method="post">
                    <div class="form-group">
                        <label for="produto">Produto:</label>
                        <input type="text" name="produto" id="produto" class="form-control" required>
                    </div>
            </form>
    </body>
</html> 
