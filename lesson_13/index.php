<?php
class Factorial {
    public function calculateFactorial($number) {

        $factorial = 1;


        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }


        return $factorial;
    }
}


$factorialCalculator = new Factorial();


$result = $factorialCalculator->calculateFactorial(5);
echo "Факториал числа 5: " . $result;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
<h2>Калькулятор</h2>
<form action="calculate.php" method="post">
    <input type="number" name="num1" required>
    <select name="operation" required>
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="number" name="num2" required>
    <button type="submit">Посчитать</button>
</form>
</body>
</html>

