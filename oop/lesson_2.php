<?php


echo "<br><hr>";

class ClassAe
{

    public function __construct()
    {

    }

    public function testMethod()
    {
        echo "hello kirill";
    }
}

$classAe = new ClassAe();
$classAe->testMethod();

abstract class Shape
{
    abstract public function area();

    abstract public function perimetr();

}

class Squere extends Shape
{

    private int $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function area()
    {
        return pow($this->a, 2);
    }

    public function perimetr()
    {
        //
    }
}

$square = new Squere(5);
echo $square->area();


//Интерфейс
interface IBaseProduct
{
    public function getPrice(): float;
}

class Product implements IBaseProduct
{
    private float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}

$product = new Product(5.5);
echo $product->getPrice();


trait Logging
{
    public function log(string $string)
    {

    }
}

class MyCass
{
    use Logging;

    public function doSmth()
    {
        $this->log("fgdfgfd");
    }
}


trait Greething
{
    public function sayHelllo()
    {
        echo "Hello";
    }
}

class MyClass2
{
    use Greething, TestTr;

    function test(): void
    {

    }
}

$hello = new MyClass2();
echo $hello->sayHelllo();


trait TestTr
{
    abstract function test(): void;
}


//Статический метод
class Math
{

    public static int $count = 0;

    public static function add(float $a, float $b)
    {
        return $a + $b;
    }

    public static function increment()
    {
        self::$count++;
    }
}

$result = Math::add(2, 4);
echo $result;
echo "<br><hr>";
Math::increment();

class StringHelper
{
    public static function sluqify(string $string)
    {
        $string = preg_replace('/[^a-z0-9]+/i', '-', $string);
        $string = trim($string, '-');
        $string = strtolower($string);
        return $string;
    }
}

echo StringHelper::sluqify("Hello helPER");

class Singleton
{
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function dosmth()
    {
        //
    }
}

class Vihecle
{
    protected static $color = 'red';
}

class Car extends Vihecle
{

    public function getColor(): string
    {
        return parent::$color . ' car';
    }
}

$car = new Car();
echo $car->getColor();





