<?php 
function QuebraLinha()
{
    echo "<br>";
}
function ImprimirTexto($texto)
{
    echo $texto;
    QuebraLinha();
}

function Adicao($numero1, $numero2)
{
    return  $numero1 + $numero2 ;
}
function Subtracao($numero1, $numero2)
{
    return  $numero1 - $numero2 ;
}
function Multiplicacao($numero1, $numero2)
{
    return  $numero1 * $numero2 ;
}
function Divisao($numero1, $numero2)
{
    return  $numero1 / $numero2 ;
}
function Resto($numero1, $numero2)
{
    return  $numero1 % $numero2 ;
}
function Media($numero1, $numero2)
{
    return Adicao($numero1,$numero2) / 2 ;
}
ImprimirTexto( Adicao(10,12) ); //22
ImprimirTexto( Subtracao(20,12) );// 8
ImprimirTexto( Multiplicacao(2,9) ); // 18
ImprimirTexto( Divisao(50,2) ); // 25
ImprimirTexto( Resto(3,2) ); //1
ImprimirTexto( "Média 8 e 7 =". Media(8,7) );//7.5

//ImprimirTexto("Minha chamada da função");
//ImprimirTexto("2º");
//ImprimirTexto("terceira");
//ImprimirTexto("quarta vez que eu chamo");
//ImprimirTexto("Ultima chamada");

//Faça uma função que receba 3 parametros que são:
//dois numeros, uma operação referente ao calculo
//imprima na tela 
//Faça uma validação se a operação é válida
// O nome da função deve ser LendariaCalculadora
function LendariaCalculadora($num1, $num2,$operacao)
{
    $resultado = 0;
    if($operacao == "+"){
        $resultado = Adicao($num1, $num2);
    }else if($operacao == "-"){
        $resultado = Subtracao($num1, $num2);
    }else if($operacao == "*"){
        $resultado = Multiplicacao($num1, $num2);
    }else if($operacao == "/"){
        $resultado = Divisao($num1, $num2);
    }else if($operacao == "M"){
        $resultado = Media($num1, $num2);
    }else if($operacao == "R"){
        $resultado = Resto($num1, $num2);
    }else{
        $resultado = "Operação Inválida";
    }
    ImprimirTexto($resultado);
}
LendariaCalculadora(20,10,"M");//15
LendariaCalculadora(20,10,"-");//10
LendariaCalculadora(20,10,"+");// 30
LendariaCalculadora(20,10,"/");// 2
LendariaCalculadora(20,10,"R");// 0
LendariaCalculadora(20,10,"*");// 200
?>