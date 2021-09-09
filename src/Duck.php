<?php
namespace App;
use App\Interfaces\Quackable;
use App\Interfaces\Swimable;

class Duck extends Animal implements Swimable,Quackable
{
    public function quack()
    {
         print $this->animalInfo().' can Quack'.PHP_EOL;
    }
    public function swim()
    {
         print $this->animalInfo().' can Swim'.PHP_EOL;
    }

    public function live()
    {
         print $this->animalInfo().' live in water'.PHP_EOL;
    }

    public function specialAbilities()
    {
        $this->quack();
        $this->swim();
    }
}