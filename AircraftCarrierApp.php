<?php 
include_once 'classes.php';

$plane001 = new F16();
$plane002 = new F36();
echo '<pre>';
print_r($plane001);
print_r($plane002);
echo  '</pre>';

echo "Leftover freom refill: ",$plane001->refill(15);
echo "<br>";

echo $plane001->getStatus(),"<br>";

echo 'fight'."<br>";
echo $plane001->fight();
echo "<br>";

echo $plane001->getStatus(),"<br>";
echo $plane001->getStatus(),"<br>";

?>