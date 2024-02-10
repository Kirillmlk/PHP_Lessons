<?php


/*
 * Исходный массив: [1, 22, 333, 4444, 22, 5555, 1]
 * Удалите из этой строки все подстроки, в которых количество символов больше трех.
 */


$array = [1, 22, 333, 4444, 22, 5555, 1];
$string = implode(" ", $array);

$result = preg_replace('/\b\w{4,}\b/', '', $string);

$resultArray = explode(" ", $result);

print_r($resultArray);
echo('<br><hr>');

//Преобразуйте эту дату в следующий массив:

$data = '2025-12-31';

$dataEx = explode('-', $data);

$dataArray = [
    'year' => $dataEx[0],
    'month' => $dataEx[1],
    'day' => $dataEx[2],
];
print_r($dataArray);
echo('<br><hr>');


//Сделайте функцию, которая параметром будет принимать текст со словами,
// а возвращать текст, в котором эти слова будут отсортированы в алфавитном порядке.


function wordSort($text)
{
    $words = explode(" ", $text);
    sort($words);
    $sortText = implode(" ", $words);
    return $sortText;
}

$text = "apple banana cherry date";
$sortText = wordSort($text);
echo $sortText;









