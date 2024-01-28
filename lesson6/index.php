<?php

$text = "я люблю обучаться PHP";
$rep = "JS";
// Привести все слова в исходном предложении к верхнему регистру
echo mb_strtoupper("<h2>$text</h2>");
echo "<br><hr>";

/**
 * Написать функцию, которая на вход принимает исходное предложение и вторым аргументом любую строку.
 * Далее внутри функции найти слово PHP и заменить его на слово со второго аргумента и вернуть результат выполнения
 */


function wordRep($text, $rep){
    $result = str_replace('PHP', $rep, $text);
    return $result;
}

$result = wordRep($text, $rep);
echo $result;
echo "<br><hr>";


//Посчитать количество слов в исходной строке
//Посчитать количество всех символов исходной строки

function calcWords($text) {
    return $lenStr = mb_strlen($text);

    return $wordCount = str_word_count($text,  0, 'АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдеёжзийклмнопрстуфхцчшщъыьэюя');
}

$wordCount = calcWords($text);
echo "<h2>Количество слов в строке $wordCount</h2>";
echo "<br><hr>";


$lenStr = calcWords($text);
echo $lenStr;





























