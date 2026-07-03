<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="p-5">
<div class="container">
    <h1 class="mb-4">Resultado da Soma</h1>
    <?php 

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo "<div class='alert alert-warning'>Nenhum dado foi enviado.</div>";
    } else {
        $num1 = filter_input(INPUT_POST, 'numero1', FILTER_VALIDATE_FLOAT);
        $num2 = filter_input(INPUT_POST, 'numero2', FILTER_VALIDATE_FLOAT);

        if ($num1 === false || $num2 === false || $num1 === null || $num2 === null) {
            echo "<div class='alert alert-danger'>Por favor, informe dois números válidos.</div>";
        } else {
            $soma = $num1 + $num2;

            echo "<div class='alert alert-primary mt-3'>A soma de $num1 + $num2 = $soma</div>";
        }
    }
    ?>
    <a href="atividade15.php" class="btn btn-secondary mt-3">Voltar</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>