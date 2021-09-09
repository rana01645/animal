<?php
namespace App;
use App\Interfaces\Singable;
use App\Interfaces\Swimable;

class Human extends Animal implements Swimable,Singable
{
    public function swim()
    {
        print $this->animalInfo().' can Swim'.PHP_EOL;
    }

    public function sing()
    {
         print $this->animalInfo().' can Sing'.PHP_EOL;
    }

    public function live()
    {
         print $this->animalInfo().' live in Building'.PHP_EOL;
    }

    function specialAbilities()
    {
        $this->swim();
        $this->sing();
    }
}