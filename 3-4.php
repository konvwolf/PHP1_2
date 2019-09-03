<?php

/* Реализовать основные 4 арифметические операции в виде функций с двумя
параметрами. Обязательно использовать оператор return */

$a = 2;
$b = 2;

function summ ($arg1, $arg2) { // функция суммирования
    return $arg1 + $arg2;
}

function minus ($arg1, $arg2) { // функция вычитания
    return $arg1 - $arg2;
}

function multiply ($arg1, $arg2) { // функция умножения
    return $arg1 * $arg2;
}

function divide ($arg1, $arg2) { // функция деления
    return $arg1 / $arg2;
}

echo summ ($a, $b).PHP_EOL;
echo minus ($a, $b).PHP_EOL;
echo multiply ($a, $b).PHP_EOL;
echo divide ($a, $b).PHP_EOL;


/* Реализовать функцию с тремя параметрами:
    function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием
операции. В зависимости от переданного значения операции выполнить одну
из арифметических операций (использовать функции из пункта 3) и вернуть
полученное значение (использовать switch) */

function calculateThis ($arg1, $arg2, $operation) {
    switch ($operation) {
        case '-':
            return minus ($arg1, $arg2);
            break;

        case '+':
            return summ ($arg1, $arg2);
            break;

        case '*':
            return multiply ($arg1, $arg2);
            break;

        case '/':
            return divide ($arg1, $arg2);
    }
}

$oper = '+';

echo calculateThis ($a, $b, $oper);