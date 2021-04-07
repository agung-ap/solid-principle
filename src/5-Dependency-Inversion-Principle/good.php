<?php
declare(strict_types=1);

interface Employees
{
    public function work(): void;
}

class Human implements Employees
{
    public function work(): void
    {
        echo 'Human Work'.PHP_EOL;
        // ....working
    }
}

class Robot implements Employees
{
    public function work(): void
    {
        //.... working much more
        echo "Robot Work".PHP_EOL;
    }
}

class Manager
{
    private $employee;

    public function __construct(Employees $employee)
    {
        $this->employee = $employee;
    }

    public function manage(): void
    {
        $this->employee->work();
    }
}

$human = new Manager(new Human());
$human->manage();

