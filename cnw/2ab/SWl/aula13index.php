<?php

$membros = array("Peter" =>"35", "Ben" => "37", "Joe" => "43");

echo "<br>";
echo"###################################################################################";
echo "<br>";

$car = [
    0 => "Volvo",
    1 => "BMW",
    2 => "Toyota",
];

echo "<br>";
echo $car["0"];
echo "<br>";
echo $car["1"];
echo "<br>";
echo $car["2"];

$mycar = [
    "brand"=> "Ford",
    "model" => "Mustang",
    "year" => 1964,
];

$car = [];
$car[0]="Volvo";
$car[1]="BMW";
$car[2]="Toyota";

echo "<br>";
echo"###################################################################################";
echo "<br>";

$car = array("brand" => "Ford","model" => "Mustang","year" => 1964);
$car ["year"] = 2024;

foreach($car as $x => $y){
    echo " $x : $y <br> ";
};
?>