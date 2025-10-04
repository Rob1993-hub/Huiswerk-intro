<?php

$arr = array(42, 67, 35, 89, 24, 76, 58, 93, 7, 30, 83, 46, 13, 25, 98, 53, 17, 79, 57, 8);

$length = count($arr);
$counts = ["even" => 0, "odd" => 0];

for ($index = 0; $index < $length; $index++) {
    $number = $arr[$index]; // tijdelijke variabele met de waarde uit de array

    if ($number % 2 === 0) {
        echo "$number is een even nummer\n";
        $counts["even"]++;
    } else {
        echo "$number is een oneven nummer\n";
        $counts["odd"]++;
    }
}

echo "\nAantal even nummers: " . $counts["even"];
echo "\nAantal oneven nummers: " . $counts["odd"];

    
    
#samenvatting: de array gebruiken. 2. van twee if-statements 1 maken.
#currentnumer veranderen index
#current number array index tijdelijke variabele

#echo $arr[$currentNumber] . " ";
