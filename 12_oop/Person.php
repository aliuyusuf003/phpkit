<?php

class Person {
    public string $name;
    public int $age;
    private ?float $salary;   // float datatype but also allows null value.

    static int $counter = 0;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
        self::$counter++;
       
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public static function getCounter()
    {
        return self::$counter;
    }
}


class Device{
    public $name;
    public $model;
    public $color;

    public function __construct($name,$model,$color){

        $this->name = $name;
        $this->model = $model;
        $this->color = $color;
    }
    public function showProperties(){
        return $this->name.'<br>'.$this->model.'<br>'.$this->color;

    }
}


