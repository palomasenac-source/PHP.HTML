<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">   
    <link rel="stylesheet" href="../../css/style.css">

</head>
<body class="p-5">
    <div class="container">
        <h1 class="mb-4">Formulário da soma</h1>
        <form action="resultado.php" method="post">
            <div class="row mb-3">
                <label for="numero1" class="form-label">Digite o primeiro número:</label>
                <input type="number" step="any" class="form-control" id="numero1" name="numero1" placeholder="ex:10" required>
            </div>
            <div class="row mb-3">
                <label for="numero2" class="form-label">Digite o segundo número:</label>
                <input type="number" step="any" class="form-control" id="numero2" name="numero2" placeholder="ex:25" required>
            </div>
            <button type="submit" class="btn btn-primary">CALCULAR</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>