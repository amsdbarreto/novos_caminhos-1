<?php

// Questão 4

// Gisifruno ganhou estátuas de diferentes tamanhos como
// presente da Mária de aniversário,
// cada estátua tendo um tamanho inteiro não negativo.
// Como ele gosta de fazer as coisas perfeitas, ele quer
// organizá-las da menor para a maior, de forma que cada
// estátua seja maior que a anterior exatamente em 1.
// Ele pode precisar de algumas estátuas adicionais 
// para conseguir isso. 
// Ajude-o a descobrir o número mínimo de estátuas
// adicionais necessárias.

//Exemplo

//Se statues = [6, 2, 3, 8], o valor
// de retorno deve ser 3.
// Gisifruno precisa de estátuas de tamanhos 4, 5 e 7
// ou seja de três estátuas

makeArrayConsecutive2( [6, 3]);
function makeArrayConsecutive2($statues)
{
    sort($statues);
    $arrayorder=$statues;
    $calcatual=0;
    
    
    $x=count($arrayorder)-1;

    foreach ($arrayorder as $key => $value) 
    {
        
            
        if($key < $x)
        {
           $calcatual +=(($arrayorder[$key+1]-1)-$value);
           echo "<p>".$key ." ==> ".$value. " - ".$arrayorder[$key+1]. " = " .(($arrayorder[$key+1]-1)-$value)."</p>";
           
                
           
        }
        
        # code...
    }
    echo 'valor :'. $calcatual;
}