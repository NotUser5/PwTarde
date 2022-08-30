<?php
//Array
$carros = array();
//           0      1       2           3
$carros = ["BMW", "Gol", "Salveiro", "Hilux"];
/*
echo "<ul>";
for($i = 0; $i < count($carros); $i ++ )
{
    echo "<li> $carros[$i] </li>";
}
echo "</ul>";
echo "<pre>";
print_r($carros);
echo "</pre>";
$nomes = array("Fernando", "Isabela", "Sabrina", "Renato");
echo "<pre>";
print_r($nomes);
echo "</pre>";
echo $nomes[2];
$nomes[567] = "Carlos";
array_push($nomes,"Bruno");
echo "<pre>";
print_r($nomes);
echo "</pre>";
$nomes[4] = "Gabriela";
echo "<pre>";
print_r($nomes);
echo "</pre>";
array_push($nomes,"Jubileu");
echo "<pre>";
print_r($nomes);
echo "</pre>";
array_pop($nomes);
array_pop($nomes);
echo "<pre>";
print_r($nomes);
echo "</pre>";
$carros["Eletricos"] = "Tesla";
echo "<pre>";
print_r($carros);
echo "</pre>";
$cadastro = array();
$pessoa1 = array("Id" => 1, "Nome" => "Fer", "CPF"=> "123");
$pessoa2 = array("Id" => 2, "Nome" => "Sa", "CPF"=> "456");
$pessoa3 = array("Id" => 3, "Nome" => "Bruno", "CPF"=> "789");
 
$cadastro["CLiente"] = $pessoa1;
array_push($cadastro, $pessoa2);
array_push($cadastro, $pessoa3);
echo "<pre>";
print_r($cadastro);
echo "</pre>";
*/

$numeros = array( rand(-10,10), rand(-10,10),rand(-10,10),
                  rand(-10,10), rand(-10,10), rand(-10,10),
                  rand(-10,10), rand(-10,10),rand(-10,10),
                  rand(-10,10),  );
$negativos = 0;
$positivos = 0; 
for($i = 0; $i < 10; $i++)
{
    if($numeros[$i] < 0)
    { 
        $negativos++;
     } else { 
        $positivos++; 
    }
}
echo "Negativos: $negativos Positivos $positivos<pre>";
print_r($numeros);
echo "</pre>";


?>