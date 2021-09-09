<?php
namespace App\Interfaces;
interface AnimalInterface
{
    //animals behavior... what an animal can do?
    //we are adding those methods so anyone can know about the animals by them ... why?
    //the animal is providing the information about itself .. who
    public function eat();
    public function sleep();
    public function live();
    public function specialAbilities();
}