<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subtração - Atividade 14</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="p-4">
    <?php 
    include("conexao.php");

    $num1 = 25; 
    $num2 = 30;
    $num3 = 15; 
    
    $resultado = $num1 - $num2 - $num3; 

    $sql = "INSERT INTO subtracao (numero1, numero2, numero3, resultado)
    VALUES ($num1, $num2, $num3, $resultado)";

    if ($conexao->query($sql)) {
        echo "<div class='alert alert-success'Os seus Dados foram gravados com sucesso!"; 

    }else{
    echo "Erro ao salvar";
    };
    ?>

</body>
</html>




