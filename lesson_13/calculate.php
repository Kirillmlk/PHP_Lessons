<?php

require_once 'Calculator.php';


$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['operation'];

$calculator = new Calculator("history.txt");


try {
    switch ($operation) {
        case 'add':
            $result = $calculator->add($num1, $num2);
            break;
        case 'subtract':
            $result = $calculator->subtract($num1, $num2);
            break;
        case 'multiply':
            $result = $calculator->multiply($num1, $num2);
            break;
        case 'divide':
            $result = $calculator->divide($num1, $num2);
            break;
        default:
            throw new Exception("Invalid operation.");
    }
    echo "Результат: $result";
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage();
}

class Calculator {
    private $historyFile;

    public function __construct($historyFile) {
        $this->historyFile = $historyFile;
    }

    public function add($a, $b) {
        $result = $a + $b;
        $this->logOperation("$a + $b = $result");
        return $result;
    }

    public function subtract($a, $b) {
        $result = $a - $b;
        $this->logOperation("$a - $b = $result");
        return $result;
    }

    public function multiply($a, $b) {
        $result = $a * $b;
        $this->logOperation("$a * $b = $result");
        return $result;
    }

    public function divide($a, $b) {
        if ($b == 0) {
            throw new Exception("Division by zero.");
        }
        $result = $a / $b;
        $this->logOperation("$a / $b = $result");
        return $result;
    }

    private function logOperation($operation) {
        $timestamp = date('Y-m-d H:i:s');
        $logEntry = "$timestamp - $operation\n";
        file_put_contents($this->historyFile, $logEntry, FILE_APPEND);
    }
}
?>
