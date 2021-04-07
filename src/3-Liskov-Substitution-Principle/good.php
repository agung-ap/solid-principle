<?php
declare(strict_types=1);

interface Shape
{
    public function getArea(): int;

    public function keliling(): int;
}

class Rectangle implements Shape
{
    private $width = 0;
    private $height = 0;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): int
    {
        return $this->width * $this->height;
    }

    public function keliling(): int
    {
        return 2 * ($this->width + $this->height);
    }
}

class Square implements Shape
{
    private $length = 0;

    public function __construct(int $length)
    {
        $this->length = $length;
    }

    public function getArea(): int
    {
        return $this->length ** 2;
    }

    public function keliling(): int
    {
        return $this->length * 4;
    }
}

function printArea(Shape $shape): void
{
    echo sprintf('%s has area %d.', get_class($shape), $shape->getArea()).PHP_EOL;
}

function printKeliling(Shape $shape): void
{
//    echo sprintf('%s punya keliling %d.', get_class($shape), $shape->keliling()).PHP_EOL;
    echo get_class($shape) . ' punya keliling '. $shape->keliling(). PHP_EOL;
}

printArea(new Square(10));
printKeliling(new Square(10));

//$shapes = [new Rectangle(4, 5), new Square(5)];
//
//foreach ($shapes as $shape) {
//    printArea($shape);
//}