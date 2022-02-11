<?php
/*
    2. Вывести на экран последовательность чисел Фибоначчи
*/

function fibonacci($n, $firstNumber = 0,$secondNumber = 1): array
{
    $fibonacciNumber = [$firstNumber, $secondNumber];
    for($i=1; $i<$n; $i++)
    {
        $fibonacciNumber[] = $fibonacciNumber[$i]+$fibonacciNumber[$i-1];
    }
    return $fibonacciNumber;
}
echo "<pre>";

print_r(fibonacci(10));
