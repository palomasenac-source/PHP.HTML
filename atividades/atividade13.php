<?php 


$numero1 = 12;
$numero2 = 15;
$multiplicacao = 10*5;
$resultado = $numero1 * $numero2;


$sql = "INSERT INTO multiplica (numero1, numero2, multiplicacao, resultado)
VALUES ($numero1, $numero2, $multiplicacao, $resultado)";

if ($multiplicacao) {
    echo "Dados salvos com sucesso!"; 

}else{
    echo "Erro ao salvar";
};
?>
