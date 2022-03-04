<?php
$ask = readline("what do you want to do (+, -, :, x, ^): ");

$input = readline("Enter your first digit: ");
$input2 = readline("Enter your second digit: ");

if ($ask === "+") {
    $input + $input2;
    $answer1 = $input + $input2;
    echo "$input + $input2 = $answer1";


} if ($ask === "-") {
    $input - $input2;
    $answer2 = $input - $input2;
    echo "$input - $input2 = $answer2";


} if ($ask === ":") {
    $input / $input2;
    $answer3 = $input / $input2;
    echo "$input : $input2 = $answer3";


} if ($ask === "x") {
    $input * $input2;
    $answer4 = $input * $input2;
    echo "$input x $input2 = $answer4";


} if ($ask === "^") {
    $input ** $input2;
    $answer5 = $input ** $input2;
    echo "$input ^ $input2 = $answer5";
}
