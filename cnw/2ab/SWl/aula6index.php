<?php
echo "<br>";
echo"################################################ cast para string ###################################";
echo "<br>";
$a = 5; // int
$b = 5.34; // float 
$c = "hello"; // string
$d = true ;//boolean
$e = NULL ;

$a = (string)$a;
$b = (string)$b;
$c = (string)$c;
$d = (string)$d;
$e = (string)$e;

//verificando o tipo dos objetos em php, usando a função var_dump() 
var_dump($a); 
var_dump($b); 
var_dump($c); 
var_dump($d); 
var_dump($e); 

//cast para inteiros

$a = 5;
$b = 5.34;
$c = "25 kilometros";
$d = "kilometros 25";
$e = "hello";
$f = true;
$g = NULL;

$a = (int)$a;
$b = (int)$b;
$c = (int)$c;
$d = (int)$d;
$e = (int)$e;
$f = (int)$f;
$g = (int)$g;

echo "<br>";
echo "################################################ cast para inteiro ###################################";
echo "<br>";
var_dump($a); 
var_dump($b); 
var_dump($c); 
var_dump($d); 
var_dump($e); 
var_dump($f); 
var_dump($g);
echo "<br>";
echo "################################################ cast para float ###################################";
echo "<br>";
$a = 5;
$b = 5.34;
$c = "25 kilometros";
$d = "kilometros 25";
$e = "hello";
$f = true;
$g = NULL; 

$a = (float)$a;
$b = (float)$b;
$c = (float)$c;
$d = (float)$d;
$e = (float)$e;
$f = (float)$f;
$g = (float)$g;

var_dump($a); 
var_dump($b); 
var_dump($c); 
var_dump($d); 
var_dump($e); 
var_dump($f); 
var_dump($g);

?>