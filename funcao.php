<?php

    function imprimirQuebra(){
        echo "<br>";
        echo "<hr>";
        echo "<br>";
    }

    imprimirQuebra();

    //count()
    //rand()  - -  cria numeros randomicos

    echo "José";
    imprimirQuebra();
    echo "Shibata";
    imprimirQuebra();
    //for($i = 0; $i<5; $i++){
    //   imprimirQuebra();
    //}

    function imprimirTexto($texto){
        echo $texto;
    }

    $algumTexto = "qualquer coisa". "20";

    imprimirTexto("José");
    imprimirQuebra();
    imprimirTexto("Shibata");
    imprimirQuebra();
    imprimirTexto($algumTexto);
    imprimirQuebra();

    function adicao($numero1 ,$numero2){
        $soma = $numero1 + $numero2;
        imprimirTexto($soma);
    }

    function subtracao($numero1 ,$numero2){
        $sub = $numero1 - $numero2;
        imprimirTexto($sub);
    }

    function multiplicacao($numero1 ,$numero2){
        $multi = $numero1 * $numero2;
        imprimirTexto($multi);
    }

    function divisao($numero1 ,$numero2){
        $div = $numero1 / $numero2;
        imprimirTexto($div);
    }

    adicao(10,2);
    imprimirQuebra();
    subtracao(10,2);
    imprimirQuebra();
    multiplicacao(10,2);
    imprimirQuebra();
    divisao(10,2);
    imprimirQuebra();





?>