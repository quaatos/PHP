<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quaatos calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="layout">
    <form method="post" action="index.php">
        <input class="input" name="inputOne" type="text">
        <input class="input" name="inputTwo" type="text">

        <button name="multi">x</button>
        <button name="add">+</button>
        <button name="substr">-</button>
        <button name="divide">:</button>
        <button name="modulo">%</button>
    </form>
<?php

$add = $_POST['add'];
$multi = $_POST['multi'];
$substr = $_POST['substr'];
$divide = $_POST['divide'];
$modulo = $_POST['modulo'];

$inputOne = $_POST['inputOne'];
$inputTwo = $_POST['inputTwo'];

if (is_numeric($inputOne) == false || is_numeric($inputTwo) == false) {
    exit("No vallid input");
}

switch(isset($_POST)) {
    case isset($_POST['add']):
        $addAnswer = $inputOne + $inputTwo;
        echo "$inputOne + $inputTwo = $addAnswer";
        break;
        
    case (isset($_POST['multi'])):
        $multiAnswer = $inputOne * $inputTwo;
        echo "$inputOne x $inputTwo = $multiAnswer";
        break;
        
    case (isset($_POST['substr'])):
        $subAnswer = $inputOne - $inputTwo;
        echo "$inputOne - $inputTwo = $subAnswer";
        break;
        
    case (isset($_POST['divide'])):
        $divideAnswer = $inputOne / $inputTwo;
        echo "$inputOne : $inputTwo = $divideAnswer";
        break;
        
    case (isset($_POST['modulo'])):
        $moduloAnswer = $inputOne % $inputTwo;
        echo "$inputOne % $inputTwo = $moduloAnswer";
        break; 
}

//developed by quaatos with <3
?>
    </div>  
</body>
</html>