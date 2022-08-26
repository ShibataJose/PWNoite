<?php 

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





?>