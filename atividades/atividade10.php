<?php 
$aprovados = 0; 
$reprovados = 0;
$candidatos = [ 
    (object)  ["Luiza", "nota" => 90],
    (object)  ["Marcela", "nota" => 50],
    (object)  ["joao", "nota" => 80],
    (object)  ["Rafael", "nota" => 60],
    (object)  ["Laura", "nota" => 100]
];

foreach ($candidatos as $candidato) {
    if ($candidato -> nota >= 80) {
        $aprovados++;
    }
}

foreach ($candidatos as $candidato){
    if ($candidato->nota <= 70) {
        $reprovados++; 
    }
}

print "Total de aprovados: $aprovados <br>"; 
print "Total de reprovados: $reprovados"; 

?>