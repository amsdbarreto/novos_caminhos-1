<?php

// Questão 7
// Dadas duas strings, encontre o
// número de caracteres comuns entre elas.

//Exemplo

//Para $s1 = "aabcc"e $s2 = "adcaa", o retorno deve ser 3.
//As strings têm 3 caracteres comuns 2 "a" e 1"c".

echo "QTD..:" .commonCharacterCount("zzzz","zzzzzzz");

function commonCharacterCount($s1, $s2)
{
    return similar_text($s1,$s2);
}