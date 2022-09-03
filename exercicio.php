<?php

    //Faça uma função que receba como parametro um número de quantidade
    //de itens e retorne retorne um array.


    function valores($n){

        $arrayNumeros = array();

        for($i = 0; $i<=$n; $i++ ){

            $arrayNumeros[$i] = rand(-10,10);  

        }
        return $arrayNumeros;
        
    }

    //Faça uma função que some todos os pares de 250 a 365 e exiba na tela

    function somaPares($n1, $n2){
        
        $soma=0;

        for($i = $n1; $i < $n2; $i++){
            if($i % 2 == 0){
                $soma += $i;
            }

        }
        return $soma;
    }

    echo("Soma dos Pares: ");
    echo "<br>";
    echo(somaPares(250, 255));
    echo "<br>";
    

    //chame a função do exercicio 1 e some todos os itens do array 

    $guardaFuncao = count(valores(5));

    $soma = 0;

    for($i = 0; $i<$guardaFuncao; $i++){
        $soma += $i;

    } 

    echo("Soma dos itens do Array: ");
    echo "<br>";
    print($soma);


   /* Faça um array que gere 10 números aleatórios
e verifique quantos são pares, quantos são impares,
quantos são positivos e quantos são negativos*/

    $arrayAleatorios = array();
    $countPar = 0;
    $countImpar = 0;
    $countPositivo = 0;
    $countNegativo = 0;

    for($i = 0; $i< 10; $i++){
        
        $arrayAleatorios[$i] = rand();

        if($arrayAleatorios[$i] % 2 == 0){
            $countPar++;
        }else $countImpar++;

        if($arrayAleatorios[$i] > 0){
            $countPositivo++;
        }else $countNegativo++;
    }

    echo "<pre>";
    print_r($arrayAleatorios);
    echo "</pre>";

    echo "Quantidade de Pares: ". $countPar ;
    echo "<br>";
    echo "Quantidade de Impares: ". $countImpar ;
    echo "<br>";

    echo "Quantidade de Positivos: ". $countPositivo;
    echo "<br>";
    echo "Quantidade de Negativos: ". $countNegativo ;
    echo "<br>";

    //Faça uma função que receba a porcentagem e um numero e calcule a porcentagem desse numero.

    function calculaPorc($num, $porc){
        $porcentagem = $porc/100;

        return $num * $porcentagem;

    }
    
    echo "<br>";
    echo "A porcentagem é:". calculaPorc(100, 30)  ;
    echo "<br>";

    //tabuada

    echo("<br>");

    for($i = 0; $i <= 10; $i++){

        echo "135 X ".$i. " = ". ($i * 135). "<br>";

        }
    
?>