<?php
$i = 1;
while($i<10){
    echo ("$i<br>");
    $i++;
}
echo "<br>";
echo"###################################################################################";
echo "<br>";
$i = 1;
while($i <6){
    if($i==3) break;
    echo$i;
    $i++;
}
echo "<br>";
echo"###################################################################################";
echo "<br>";
$i=1;
while($i <6){
    $i++;
    if($i==3) continue;
    echo$i;
}
echo "<br>";
echo"###################################################################################";
echo "<br>";
$i=1;
while($i <6):
    echo$i;
    $i++; 
endwhile;
echo "<br>";
echo"###################################################################################";
echo "<br>";
$i=1;
do{
    echo $i;
    $i++;
}while($i<6);
echo "<br>";
echo"###################################################################################";
echo "<br>";
$i=8;
do{
    echo $i;
    $i++;
}while($i<6);
echo "<br>";
echo"###################################################################################";
echo "<br>";
$i=1;
do{
    if($i == 3)break;
    echo $i;
    $i++;
}while($i<6);

echo "<br>";
echo"aula13
###################################################################################";
echo "<br>";

class Car
{

    public $color;

    public $model;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
}
$myCar = new Car("red","Volvo");

foreach($myCar as $x => $y){
    echo "$x: $y <br>";
}

?>
