<?php 
include "conexao.php";


$numero1 = 15;
$numero2 = 20;
$numero3 = 35;

$resultado = $numero1 + $numero2 + $numero3;


$sql = "INSERT INTO soma (numero1, numero2, numero3, resultado)
VALUES ($numero1, $numero2, $numero3, $resultado)";

if ($conexao ->query($sql)) {

    echo "<br> Primeira soma salva com sucesso!"; 

}else{
    echo "<br> Erro ao salvar os dados da soma!".$conexao->error;
};


?>