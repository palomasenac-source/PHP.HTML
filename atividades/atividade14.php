<?php 

$num1 = 25; 
$num2 = 30;
$num3 = 15; 
$subtracao = 30 - 15;
$resultado = $num1 - $num2; 

$sql = "INSERT INTO subtrai (num1, num2, num3,  subtracao, resultado)
VALUES ($num1, $num2, $num3, $subtracao, $resultado)";

if ($subtracao) {
    echo "Os seus Dados foram gravados com sucesso!"; 

}else{
    echo "Erro ao salvar";
};
?>
