<?php
$data = [];
$question = readline("How many favorite code languages do you have >>> ");

if (is_numeric($question) == FALSE) {
    echo "Please enter a number, quiting...\n";
    sleep(2);
    exit;
}

for ($i = 1; $i <= $question; $i++) {
    $code_names = readline("Enter them >>> ");
    $data[] = $code_names;
}

echo PHP_EOL;

echo "list of your favorite code languages:" . PHP_EOL;

foreach ($data as $value) {
    echo $value . PHP_EOL;
}

//Created by quaatos with <3
?>
