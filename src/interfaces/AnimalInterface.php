<?php
namespace App\Interfaces;
interface AnimalInterface
{
    //animals behavior... what an animal can do?
    public function eat();
    public function sleep();
    public function live();
    public function specialAbilities();
}