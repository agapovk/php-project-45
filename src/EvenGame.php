<?php

namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;

function evenGame($name)
{
    $numbers = array(rand(1, 100), rand(1, 100), rand(1, 100));
    line('Answer "yes" if the number is even, otherwise answer "no".');
    foreach ($numbers as $number) {
        line("Question: " . $number);
        $answer = prompt("Your answer");
        if ($answer === 'yes' && $number % 2 === 0) {
            line("Correct!");
        } elseif ($answer === 'no' && $number % 2 !== 0) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $answer === 'yes' ? 'no' : 'yes');
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
