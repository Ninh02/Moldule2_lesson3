<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QuadraticEquation</title>
</head>
<body>
<form method="post">
    <input type="number" name="a">X^2+
    <input type="number" name="b">X+
    <input type="number" name="c">
    <button type="submit" value="button">Calculator</button>
</form>
<?php
include_once "QuadraticEquation.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $quad= new QuadraticEquation($a,$b,$c);
    $quad->calculator();
}
?>
</body>
</html>
