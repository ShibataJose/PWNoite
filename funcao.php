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

    function imprimirTexto($texto){
        echo $texto."<br>";
    }

    $algumTexto = "qualquer coisa". "20";

    imprimirTexto("José");
    imprimirQuebra();
    imprimirTexto("Shibata");
    imprimirQuebra();
    imprimirTexto($algumTexto);
    imprimirQuebra();

    function adicao($numero1 ,$numero2){
        return $numero1 + $numero2;
    }

    function subtracao($numero1 ,$numero2){
        return $numero1 - $numero2;
    }

    function multiplicacao($numero1 ,$numero2){
        return $numero1 * $numero2;
    }

    function divisao($numero1 ,$numero2){
        return $numero1 / $numero2;
    }

    function mediaAr ($numero1 ,$numero2){
        return ($numero1 + $numero2)/2;
    }

    imprimirTexto("A soma total é: ".adicao(10,2));

    imprimirTexto("A subtração é: ".subtracao(10,2));

    imprimirTexto("A multiplicaçao é: ".multiplicacao(10,2));

    imprimirTexto("A divisao é: ".divisao(10,2));

    imprimirTexto("A média aritmética é: ".mediaAr(10,8));

    //atividade criar calculadora

    function calculadora($numero1, $numero2, $ope){
        switch($ope){
            case '+': return $numero1 + $numero2;
            case '-': return $numero1 - $numero2;
            case '*': return $numero1 * $numero2;
            case '/': return $numero1 / $numero2;
            default: return "Operação inexistente";
        }
    }
    imprimirTexto("O total do calculo efetuado foi: ".calculadora(10,2,'+'));

?>