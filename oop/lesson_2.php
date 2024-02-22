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
