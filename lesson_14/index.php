<?php


if (!file_exists('data')) {
    mkdir('data', 0777, true);
}

// Путь к файлу Animals.txt
$filePath = 'data/Animals.txt';

// Проверяем, существует ли файл. Если нет, создаем его и записываем в него данные
if (!file_exists($filePath)) {
    $data = '[
    {
        "name": "animal 1",
        "type": "Fox"
    },
    {
        "name": "animal 2",
        "type": "Elephant"
    },
    {
        "name": "animal 3",
        "type": "Dog"
    },
    {
        "name": "animal 4",
        "type": "Crane"
    }
    ]';

    file_put_contents($filePath, $data);
}

// Создаем трейт для получения данных из файла
trait AnimalDataTrait
{
    // Метод для получения данных из файла и преобразования их в массив
    public function getAnimalDataFromFile($filePath)
    {
        $data = file_get_contents($filePath);
        return json_decode($data, true);
    }
}

global $filePath;

interface Moveable
{
    public function move();
}


interface Eatable
{
    public function eatFood($food);
}

interface Animal extends Moveable, Eatable
{

    public function getWeight();

    public function getColor();
}

class Fox implements Animal
{
    use AnimalDataTrait;

    private $color;
    private $weight;

    public function __construct($color, $weight)
    {

        $this->color = $color;
        $this->weight = $weight;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function move()
    {
        echo "Лиса передвигается.";
    }

    public function eatFood($food)
    {
        echo "Лиса ест $food.\n";
    }
}


$fox = new Fox("рыжий", 10);

echo "Цвет лисы: " . $fox->getColor() . ", Вес: " . $fox->getWeight() . ", Скорость: " . "\n";
$fox->move();
$fox->eatFood("мясо");

echo "<br><hr>";


class Elephant implements Animal
{
    use AnimalDataTrait;

    private $color;
    private $weight;

    public function __construct($color, $weight)
    {
        $this->color = $color;
        $this->weight = $weight;
    }


    public function getColor()
    {
        return $this->color;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function move()
    {
        echo "Слон передвигается.\n";
    }

    public function eatFood($food)
    {
        echo "Слон ест $food.\n";
    }
}

$elephant = new Elephant("серый", 5000);
echo "Цвет слона: " . $elephant->getColor() . ", Вес: " . $elephant->getWeight() . "\n";
$elephant->move();
$elephant->eatFood("трава");
echo "<br><hr>";


class Pigeon implements Animal
{
    use AnimalDataTrait;

    private $color;
    private $weight;

    public function __construct($color, $weight)
    {

        $this->color = $color;
        $this->weight = $weight;
    }


    public function getColor()
    {
        return $this->color;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function move()
    {
        echo "Голубь передвигается.\n";
    }

    public function eatFood($food)
    {
        echo "Голубь ест $food.\n";
    }
}

$pigeon = new Pigeon("серый", 1);
echo "Цвет голубя: " . $pigeon->getColor() . ", Вес: " . $pigeon->getWeight() . ", Скорость: " . "\n";
$pigeon->move();
$pigeon->eatFood("зерно");
echo "<br><hr>";