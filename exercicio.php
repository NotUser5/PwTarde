<?php
    //Crie uma variável e atribua um array com os seguintes itens : 20, 15, 30, 17, 8
    $ex1 = array(20, 15, 30, 17, 8);

    //Faça uma função que imprima o array do primeiro exercício.
    function ex($ex1){
        echo "<pre>";
        print_r($ex1);
        echo "</pre>";
    }
    ex($ex1);

    //Crie uma função que some todos os itens do array do exercício 1;
    function soma($ex1){
        $soma = 0;
        for($i=0;$i<count($ex1);$i++){
            $soma += $ex1[$i];
        }
        return $soma;
    }
    echo soma($ex1);

    //Utilizando o For imprima a tabuada do 144.
    for($i=0;$i<11;$i++){
        echo "<pre>";
        print_r ("144 * $i = ".$i*144);
        echo "</pre>";
    }

    //Exiba na tela todos os itens pares de 251 de 544.
    for($i=251;$i<545;$i++){
        if($i%2==0){
            print_r ($i);
            echo " ";
        }
    }

    //Adicione 3 novos itens no array do exercício 1 usando a função rand(-10,10).
    $ex1[5] = rand(-10,10);
    $ex1[6] = rand(-10,10);
    $ex1[7] = rand(-10,10);
    ex($ex1);

    //Faça uma função que receba a porcentagem e um numero e calcule a porcentagem desse numero.
    function porc($porc, $num){
        $resul = $num * ($porc/100);
        echo $porc."% de ".$num." é = ".$resul."<br>";
    } 
    porc(rand(0, 100), rand(0, 1000));
    
    //Exiba na tela a quantidade de pares, impares, negativos e positivos do array do exercício 1
    $negativos = 0;
    $positivos = 0;
    $par = 0;
    $impar = 0;
    for($i = 0; $i < count($ex1); $i++)
    {
        if($ex1[$i] > 0){ 
            $positivos++; 
        }
        if($ex1[$i] < 0){ 
            $negativos++;
        }
        if($ex1[$i]%2){
            $par++;
        }
        else{
            $impar++;
        }
    }
    echo "<br>Positivos: $positivos Negativos: $negativos Pares: $par Impares: $impar<br>";

    //Calcule a média do array do exercício 1
    echo "<br>".soma($ex1)/8;
?>