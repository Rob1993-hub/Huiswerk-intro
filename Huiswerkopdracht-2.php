<?php

$maxNumber = (int)readline("Voer een getal in (100 wordt bijvoorbeeld tussen 1 en 100)"); 
# (int)readline vraagt de gebruiker om een input. We koppelen dit aan de variabele $maxNumber

$secretNumber = rand(1, $maxNumber);
# rand(min: 1, max: $maxNumber) zorgt ervoor dat we een nummer generen tussen - inclusief - 1 en het opgegeven nummer van $maxNumber


$playerGuess = $maxNumber;
 
for($playerAttempt = 1; $playerAttempt <= 10; $playerAttempt++) { # Aantal pogingen van de speler. Na elke foute gok komt gaat te teller omhoog
        $playerGuess = (int)readline("Wat is je gok?\n"); # Vraagt speler om zijn of haar gok
    if ($playerGuess === $secretNumber){ #Als de gok van de speler gelijk staat aan het verborgen nummer
        echo "Gefeliciteerd, je hebt het getal gevonden in $playerAttempt pogingen!\n"; # Speler heeft gewonnen en break stopt de loop (eindigt het spel)
        break;
    } elseif   ($playerGuess > $secretNumber) { # Als de speler het fout heeft, geef de speler een hint dat hij te hoog zit
        echo "Je zit te hoog! Je zit op poging: $playerAttempt\n";
    } elseif  ($playerGuess < $secretNumber) { # Als de speler het fout heeft, geef de speler een hint dat hij te laag zit
        echo "Je zit te laag! Je zit op poging: $playerAttempt\n";
    



    if ($playerAttempt === 10) { # Als de speler na 10 pogingen nog niet heeft weten te te zinnen, stop het spel met exit();
    echo "Helaas, je hebt verloren. Het juiste antwoord was $secretNumber\n";
    exit();
}
        
}
    
    }




        

    


 