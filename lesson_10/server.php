<?php
//
//$phone = $_GET['phone'];
//echo "hello, {$phone}";
//Валидация номера телефона
//function validatePhoneNumber($phoneNumber) {
//    return preg_match('/^\d{12}$/', $phoneNumber);
//}
//
//$phoneNumber = $phone;
//if (validatePhoneNumber($phoneNumber)) {
//    echo "Верный номер телефона.";
//} else {
//    echo "Неправильный номер телефона.";
//}


//Возврат массива

//if ($_SERVER["REQUEST_METHOD"] == "POST"){
//    $formData = array(
//        'phone' => $_POST['phone'],
//        'name' => $_POST['name'],
//        'b_day' => $_POST['b_day'],
//        'email' => $_POST['email'],
//        'gender' => $_POST['gender'],
//    );
//
//}
//
//var_dump($formData);


//$formData = array(
//    'phone' => $_POST['phone'],
//    'name' => $_POST['name'],
//    'b_day' => $_POST['b_day'],
//    'email' => $_POST['email'],
//    'gender' => $_POST['gender']
//);
//
//// Вывод массива на экран с помощью print_r()
//echo "<pre>";
//print_r($formData);
//echo "</pre>";
//
//// Или с помощью var_dump()
//echo "<pre>";
//var_dump($formData);
//echo "</pre>";

$formArray = ($_POST);
print_r ($formArray);
echo date('Y-m-d');
echo ("<br><hr>");

function calculateAge($birthDay): int {
    //Преобразую в Datetime
    $b_day = new DateTime($birthDay);
    //Создаю новый обьект с датой
    $currentDate = new DateTime();
    //Вычисляю разницу
    $ageInterval = $currentDate -> diff($b_day);
    return $ageInterval -> y;
}

$birthDay = $_POST['b_day'];
$age = calculateAge($birthDay);
echo "Возраст: $age ";
echo ("<br><hr>");




