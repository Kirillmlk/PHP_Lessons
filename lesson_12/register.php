<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $userData = "Name: $name,\nEmail: $email,\nPassword: $password\n";


        $file = fopen("users.txt", "a");


        fwrite($file, $userData);


        fclose($file);


        echo "<p>Пользователь успешно зарегистрирован.</p>";
    } else {

        echo "<p>Пожалуйста, заполните все поля.</p>";
    }
}


$file = fopen("random_numbers.txt", "w");
for ($i = 0; $i < 100; $i++) {
    $randomNumber = rand(0, 10);
    fwrite($file, $randomNumber . PHP_EOL);
}
fclose($file);
echo "Файл успешно создан.";
function countNumberOccurrences($number) {

    $file = fopen("random_numbers.txt", "r");
    if ($file) {
        $count = 0;

        while (($line = fgets($file)) !== false) {

            $line = trim($line);

            if ($line == $number) {
                $count++;
            }
        }
        fclose($file);
        return $count;
    } else {
        return "Ошибка при открытии файла.";
    }
}

// Пример использования функции
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userNumber = $_POST['number'];
    $occurrences = countNumberOccurrences($userNumber);
    echo "Число $userNumber встречается в файле $occurrences раз.";
}

$files = scandir(__DIR__);


$fileCount = 0;
$folderCount = 0;


foreach ($files as $item) {

    if ($item == '.' || $item == '..') {
        continue;
    }


    if (is_file($item)) {
        $fileCount++;
    } elseif (is_dir($item)) {
        $folderCount++;
    }
}


echo "Количество файлов: $fileCount";
echo "Количество папок: $folderCount";
?>