<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicação - Atividade 13</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="p-4">
    <?php 
    
    $num1 = 12;
    $num2 = 15;
    $num3 = 25;

    $resultado = $num1 * $num2 * $num3;

    $sql = "INSERT INTO multiplicacao (numero1, numero2, resultado) VALUES ($num1, $num2, $resultado)";

    if ($sql) {
    echo "<div class='alert alert-sucess'>Os dados da multiplicação dos três números ($num1, $num2, $num3) foram salvos com sucesso! Resultado: <strong> $resultado</strong>"; 
    }else{
        echo "<div class='alert alert-danger'>Erro ao salvar os dados da multiplicação: " .$conexao->error ."</div>";
    }
    ?>
</body>
</html>













