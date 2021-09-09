<?php
namespace App;
use App\Interfaces\Roarable;

class Tiger extends Animal implements Roarable
{
    public function roar()
    {
         print $this->animalInfo().' can Roar'.PHP_EOL;
    }

    public function live()
    {
         print $this->animalInfo().' live in Jungle'.PHP_EOL;
    }

    function specialAbilities()
    {
        $this->roar();
    }
}