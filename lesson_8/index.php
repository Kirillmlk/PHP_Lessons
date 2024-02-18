<?php
//1) Написать функцию, которая принимает на вход массив из целых чисел и вычисляет их сумму

$num = [5, 9, 3, 11, 28];


function calcSum($num){
    $sum = 0;

    foreach ($num as $num) {
        $sum += $num;
    }
    return $sum;
}

$result = calcSum($num);
echo $result;
echo ("<br><hr>");


/* Написать функцию, которая принимает на вход массив первым аргументом и вторым аргументом что-то строковое.
 * Проверить содержат ли элементы данного массива это число, завершить выполнение массива, если да.
 */


$arr = ["dfg", "dghnw", "eqduj"];

function checkParam(array $arr, string $str): string {
    $resultString = "";
    foreach ($arr as $value){
        if ($value === $str){
            break;
        }
        $resultString .= $value . ' ';
    }
    return $resultString;
}

$result_arr = checkParam($arr, "3");
echo $result;
echo ("<br><hr>");



// Написать функцию, которая принимает на вход массив,
// а возвращает элементы массива отсортированные по возрастанию.


$inputArray = [5, 2, 8, 1, 9];
$sortedArray = sortArrayAscending($inputArray);
function sortArrayAscending($array) {

    sort($array);


    return $array;
}

foreach ($sortedArray as $element) {
    echo $element . " ";
}
echo ("<br><hr>");



//ДОП ЗАДАНИЯ

//Проверка четности числа:
//Запросите у пользователя ввод числа и выведите сообщение о том, является ли введенное число четным или нечетным.


$num = 11;

if ($num % 2 == 0){
    echo "Число $num является четным";
} else{
    echo "Число $num не является четным";
}

echo ("<br><hr>");

//Определение пола:
//Запросите у пользователя ввод пола ("м" или "ж") и выведите сообщение о том,
// является ли пользователь мужчиной или женщиной.


$gender = "ж";

if ($gender == "м"){
    echo "Пользователь мужчина";
}elseif ($gender == 'ж'){
    echo "Пользователь женщина";
}else{
    echo 'Пользователь не известен ';
}
echo ("<br><hr>");

//Оценка студента:
//Запросите у пользователя ввод оценки (от 1 до 5)
// и выведите сообщение о том, является ли оценка "неудовлетворительной",
// "удовлетворительной", "хорошей" или "отличной".

$number = 1;

if ($number == 5){
    echo "Отлично";
}elseif ($number == 4){
    echo "Хорошо";
}elseif ($number == 3){
    echo "Удовлетворительно";
}elseif ($number == 2 || 1){
    echo "Очень плохо";
}else{
    echo "Отлично";
}
echo ("<br><hr>");


$num1 = 8;
$num2 = 2;
if ($num1 > $num2){
    echo "$num1 Больше чем $num2";
}elseif ($num1 < $num2){
    echo "$num1 Меньше чем $num2";
}elseif ($num1 == $num2){
    echo "$num1 Равно $num2";
}else{
    echo "Что-то не так";
}
echo ("<br><hr>");
// for

for ($i = 1; $i <= 10; $i++){
    echo $i . '';
}
echo ("<br><hr>");

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . ' ';
}

echo ("<br><hr>");


$sum = 0;
for ($i = 1; $i <= 5; $i++) {
    $sum += $i;
}
echo "Сумма: $sum";
echo ("<br><hr>");

$str = "Привет";

for ($i = 0; $i < 5; $i++) {
    echo "Привет\n";
}
echo ("<br><hr>");


for ($i = 1; $i <= 10; $i++){
    $result = $i * 3;
    echo "3 * $i = $result\n";
}