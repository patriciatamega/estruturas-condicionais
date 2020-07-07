<?php

//if: se a condição for (verdadeira), ele vai {executar}

$qualASuaIdade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca){

echo "Criança";

}

// else: senão. Importante lembrar que else é usado só no final e uma única vez.

/* else {

    echo "Não é criança";
} */

// else if: Condição que pode ser usada mais de uma vez. Pode também ser escrito junto: elseif

else if ($qualASuaIdade < $idadeMaior){

    echo "Adolescente";

}

else if ($qualASuaIdade < $idadeMelhor){

        echo "Adulto";

}

else {

    echo "Idoso";

}

//Operador Ternário. ? = então. : = else.

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";


?>