<?php
/* Написать функцию, которая вычисляет текущее время и возвращает его в формате
с правильными склонениями, например:
    22 часа 15 минут
    21 час 43 минуты */

$hours = date ('G');
$minutes = date ('i');


/**
 * Функция specifyHrEnding определяет окончание для часов
 */
function specifyHrEnding ($arg) {
    switch (true) {
        case $arg[0] == 0 || $arg[0] >= 5 && $arg[0] <= 9 || $arg[0] == 1 || $arg == 20:
            return 'ов';
            break;

        case $arg == 1 || $arg == 21:
            return '';
            break;

        case $arg[0] >= 2 && $arg[0] <= 4 || $arg[1] >= 2 && $arg[1] <= 3:
            return 'а';
    }
}

/**
 * Функция specifyMinEnding определяет окончание для минут
 */
function specifyMinEnding ($arg) {
    switch (true) {
        case $arg[1] == 1:
            return 'а';
            break;

        case $arg[1] >= 2 && $arg[1] <= 4 && $arg[0] != 1:
            return 'ы';
            break;

        default:
            return '';
    }
}

echo 'Сейчас '.$hours.' час'.specifyHrEnding($hours).' и '.$minutes.' минут'.specifyMinEnding($minutes);