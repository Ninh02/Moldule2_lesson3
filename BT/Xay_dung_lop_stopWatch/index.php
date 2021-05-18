<?php
include_once "stopWatch.php";
$watch=new stopWatch();
echo $watch->start();
echo '<br>';
$arr=[];
for($i=0;$i<=100000;$i++){
    $a=rand(0,100000);
    $arr[]=$a;
}
rsort($arr);
echo $watch->stop();
echo '<br>';
echo $watch->getElapsedTime();
