<?php 


$numero1 = 15;
$numero2 = 20;

$resultado = $numero1 + $numero2;


$sql = "INSERT INTO soma (numero1, numero2,resultado)
VALUES ($numero1, $numero2, $resultado)";

if ($sql) {

    echo "<br> Os seus dados foram gravados com sucesso!"; 

}else{
    echo "<br> Erro ao salvar os dados da soma!".$conexao->error;
};


?>