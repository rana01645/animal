<?php
namespace App\Abstracts;
use App\Interfaces\AnimalInterface;

abstract class Animal implements AnimalInterface
{
    private int $age;
    private string $name;

    public function __construct(int $age, string $name)
    {
        $this->age = $age;
        $this->name = $name;
    }

    public function animalInfo()
    {
        return $this->getName().': I ';
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function eat()
    {
        print $this->animalInfo().' can eat'.PHP_EOL;;
    }

    public function sleep()
    {
        print $this->animalInfo().' can sleep'.PHP_EOL;;
    }


}