<?php

$arr = array(42, 67, 35, 89, 24, 76, 58, 93, 7, 30, 83, 46, 13, 25, 98, 53, 17, 79, 57, 8); # Een array is een soort van combinatie tussen een Python-list en een Python-dict. Kan beide rollen vervullen
$length = count($arr); # count telt de waarden in array, we hebben het gekoppeld aan de variabele $length
$counts = ["even" => 0, "odd" => 0]; # Dit houdt de telling bij

for ($currentNumber = 0; $currentNumber < $length; $currentNumber++) { # Als currentNumber kleiner is dan length (length haalt in totaal 20 uit de array) tel telkens 1 bij currentNumber op - dit doen we met ++
    if  ($currentNumber % 2 === 0) { # We kijken of er sprake van een restdeling is door de modulo-operator in te schakelen. Als het getal te delen is door 2 zonder rest (% 2 === 0), dan is het getal even
        echo "$currentNumber is een even nummer";
        } else { # Is het getal oneven? Dan gaat hij naar de else toe
        echo "$currentNumber is een oneven nummer";
     
    }
    if ($length % 2 === 0) { #Als getal te delen is door 2 zonder rest, tellen we er 1 op bij "even"
        $counts["even"]++;
        } else { # Is het getal oneven? Dan tellen we er 1 op bij "odd"
        $counts["odd"]++;
        

    }
}
    
    



#echo $arr[$currentNumber] . " ";