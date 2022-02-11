<?php

/*
    1.1 Рекурсивная функция 1 - факториал
*/
function factorial($x)
{
    if ($x === 0)
    {
        return 1;
    }
    return $x*factorial($x-1);
}

echo factorial(3);
/*
    1.2 Рекурсивная функция 2 - все числа от заданого до 10
*/

function play($number)
{
    if ($number <= 10)
    {
        echo $number;
        play($number+1);
    }
}

play(1);
