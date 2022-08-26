<?php 
/*
    $carros = array(); //função qur transforma variavel em array
    $carros = array("BMW", "Saveiro", "Gol", "Palio","Parati");

    echo $carros[1];
    echo "<br>";
    echo $carros[0];

    echo "<pre>";
    print_r($carros);
    echo "</pre>";

    $nomes = array("Fernando", "Maria", "Fernanda", "João", "Pedro");

    $nomes[675] = "Julia";
    $nomes[465] = "Matheus";
    $nomes[34] = "Luis Fernando";

    echo "<pre>";
    print_r($nomes);
    echo "</pre>";

    $salas = array("Lab01" => 40, "Lab02" => 32); 
    $salas["Lab03"]=30;
    // os indices do array, agora, são definidos como Lab01, Lab02, Lab03...

    echo "<pre>";
    print_r($salas);
    echo "</pre>";
*/
    //Matrizes
/*
    $tabuada = array(0,1,2,3,4);
    $tabuada[0] = array(0,1,2,3,4);
    $tabuada[1] = array(0,1,2,3,4);
    $tabuada[2] = array(0,1,2,3,4);
    $tabuada[3] = array();
    $tabuada[3][0] = 0;
    $tabuada[3][1] = 3;
    $tabuada[3][2] = 6;
    $tabuada[3][3] = 9;
    $tabuada[3][4] = 12;


    $tabuada[4] = array();
    $tabuada[4][0] = 0;
    $tabuada[4][1] = 4;
    $tabuada[4][2] = 8;
    $tabuada[4][3] = 12;
    $tabuada[4][4] = 16;

    echo "<pre>";
    print_r($tabuada);
    echo "</pre>";
*/

//faça um array armarios para
//guardar: Jóias, Material Eletronico e Ferragem;

    $armario = array();
    $armario[0] = array("Joias" => array("Anel","Pingente","Pulseira","Colar"));
    $armario[1] = array("Material Eletrico" => array("Fio","Plug","Tomada","Soquete","Multimetro"));
    $armario[2] = array("Ferragens" => array("Porca","Parafuso","Arroela","Tarugo de Ferro 2p","Prego", "Martelo"));

    echo "<pre>";
    print_r($armario);
    echo "</pre>";

?>