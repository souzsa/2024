<?php
echo "<br>";
echo"###################################################################################";
echo "<br>";

for($x = 0; $x <= 10; $x++){
    if ($x % 2 == 0){
        echo "$x é par<br>";
    } else{
        echo "é impar<br>";
    }
}
echo "<br>";
echo"###################################################################################";
echo "<br>";

for($x = 0; $x <= 10; $x++){
    if($x == 3)
     break; 
    echo "the number is: $x <br>";
}

for($x = 0; $x <= 10; $x++){
    if($x == 3) continue;
    echo "the number is: $x <br>";
}
echo "<br>";
echo"###################################################################################";
echo "<br>";
$colors= array('red','green','blue','yellow');
foreach($colors as $x){
    echo"$x <br>";
}
echo "<br>";
echo"###################################################################################";
echo "<br>";
$membros= array("Petter" => "35","Ben" => "37","Joe"=>"43");
foreach($membros as $x => $y){
    echo"$x : $y <br>";
}
echo "<br>";
echo"###################################################################################";
echo "<br>";
$colors= array('red','green','blue','yellow');
foreach($colors as $x){
    if ($x == "blue") break;
    echo"$x <br>";
}
echo "<br>";
echo"###################################################################################";
echo "<br>";
$colors= array('red','green','blue','yellow');
foreach($colors as $x){
    if ($x == "green") continue;
    echo"$x <br>";
}
?>