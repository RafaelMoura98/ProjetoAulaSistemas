<?php echo"teste";
// tipos em PHP
$String = "texto";
$Integer = 123;
$Float = 10.5;
$Boolean = true; //false
$Array;
$Object;
$NULL = null;
//Array ou lista
$listaCarros = array("Chevrolet","BMW","Ford","Toyota","Fiat");
// Lista Noticias
$listaNoticias[0] = array("titulo" => "meu titulo",
"descrição"=> "esse é meu texto",
"imagem"=> "carro.jpg");
$listaNoticias[1] = array("titulo1" => "meu titulo1",
"descrição1"=> "esse é meu texto1",
"imagem1"=> "carro1.jpg");


var_dump($String); echo"<br><br><br><br>";
var_dump($Integer); echo"<br><br><br><br>";
var_dump($Float); echo"<br><br><br><br>";
var_dump($Boolean); echo"<br><br><br><br>";
var_dump($NULL); echo"<br><br><br><br>";
var_dump($listaCarros[3].'/'.$listaCarros[0]); echo"<br><br><br><br>";
echo($listaCarros[3].'/'.$listaCarros[0]); echo"<br><br><br><br>";
var_dump($listaNoticias[1]["titulo1"]);
var_dump($listaNoticias[1]["descrição1"]);
var_dump($listaNoticias[1]["imagem1"]);
?>
