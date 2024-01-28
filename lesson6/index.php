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


//Посчитать количество слов в исходной строке и количество всех символов исходной строки

function calcWords($text) {
    return $lenStr = mb_strlen($text);

    return $wordCount = str_word_count($text,  0, 'АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгдеёжзийклмнопрстуфхцчшщъыьэюя');
}

$wordCount = calcWords($text);
echo "<h2>Количество слов в строке $wordCount</h2>";
echo "<br><hr>";


$lenStr = calcWords($text);
echo $lenStr;
echo "<br><hr>";
// Работа с масивами

$array = [
    "name" => "Fred",
    "remove" => "True",
    "additional_params" =>[
        "is_married" => false,
        "country" => "France",
        "born" => "10.09.1982"
    ]
];

//Удалить второй элемент из массива
unset($array["remove"]);
print_r($array);
echo "<br><hr>";

//Найти возраст пользователя (на сегодняшний день)

$data = new DateTime();
$birthDate = DateTime::createFromFormat('d.m.Y', $array['additional_params']['born']);
$dataResult = $data -> diff($birthDate);
$age = $dataResult -> y;

echo "Возраст пользователя {$array['name']} на сегодняшний день: $age год";
echo "<br><hr>";

//Отсортировать массив по ключу (Использовать встроенные функции, без циклов!)


// Отсортировать массив по ключу
ksort($array);

// Вывести отсортированный массив
print_r($array);
echo "<br><hr>";


//Добавить информацию о стране пользователя используя новый массив
// (название, столица, часовой пояс и пр.) и поместить данный массив вместо значения country

$countryArray = [
    "name" => "France",
    "capital" => "Paris",
    "timezone" => "Europe/Paris"
];

$userData['additional_params']['country'] = $countryArray;
print_r($userData);
echo "<br><hr>";

//Объединить текущий массив с массивом [“child” => null] (встроенная функция объединения из занятия)


$newArray = ["child" => null];
$fullArray = array_merge($userData, $newArray);

print_r($fullArray);
echo "<br><hr>";



























