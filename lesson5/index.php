<?php
// Площадь прямоугольника
function calculateArea($lengh, $width) {
    $area = $lengh * $width;
    return $area;
}

$lengh = 10;
$width = 5;

$result = calculateArea($lengh, $width);

echo ("<h2>Площадь прямоугольника с длинной $lengh и шириной $width равна $result</h2>");
echo ("<br><hr>");

// Вывод количества дней в месяце


function getDays($year, $month) {
    return cal_days_in_month(CAL_GREGORIAN, $month, $year);
}
$year = 2023;
$month = 10;

$daysInMonth = getDays($year, $month);

echo "<h2>В месяце $month года $year количество дней: $daysInMonth</h2>";

// Вывод текста
echo ("<br><hr>");

function echoCust($text) {
    return function() use ($text) {
        echo $text;
    };
}

$printText = echoCust("<h2>Напиши свой текст</h2>");

$printText();

//Количество дней до нового года
echo ("<br><hr>");

$Date = new DateTime();
$newYear = new DateTime(date('Y') . '-12-31');
$interval = $Date->diff($newYear);
$daysNewYear = $interval->days;
echo "<h2>До нового года осталось $daysNewYear дней.<h2>";

//Вычисление промежутка между датами
echo ("<br><hr>");

$firstData = new DateTime('2023-01-20');
$secondData = new DateTime('2022-04-17');

$interv = $firstData ->diff($secondData);

echo "Разница между датами " . abs($interv->format('%R%a дней'));





