<?php
include_once "Fan.php";
$fan1=new Fan(3,10,"yellow",true);
$fan1->getSpeed();
echo $fan1->toString();
echo "<br>";
$fan2=new Fan(2,5,"blue",false);
$fan2->getSpeed();
echo $fan2->toString();
?>