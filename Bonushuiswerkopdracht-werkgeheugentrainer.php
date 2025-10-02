<?php

declare(strict_types=1); # declare(strict_types=1) helpt bugs in een vroeg stadium te herkennen.

function readInt(trim(string $inputDisplay, int $minNumber, int $maxNumber)) : int {
    while (true):
    $userInput = (readInt($inputDisplay));
    if ($userInput !== "" && ctype_digit($userInput))
}


# Deze is nog lang niet af, ga ik later een keer voor zitten als ik wat meer tijd heb
































// function readInt(string $inputDisplay, int $minNumber, int $maxNumber): int {
//     while (true) {
//         $userInput = readline($inputDisplay);
//         if ($userInput !== "" && ctype_digit($userInput)) {
        //     $currentNumber = (int)$userInput;
        //     if ($currentNumber >= $minNumber && $currentNumber <= $maxNumber) {
        //         return $currentNumber;

        //   }
        //  }
        // echo "Enter a number between $minNumber and $maxNumber.\n";
        // }
        // }

        // $length = readInt("How many numbers? 3-100): ", 3, 100);
        // $ms     = readInt("How big should the interval between numbers be? 0.5 sec - 5 sec): ", 500, 5000);
        // echo "You've chosen $length numbers with an interval of $ms\n"; -->