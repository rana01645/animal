<?php

require 'vendor/autoload.php';
use App\AnimalStory;
use App\Duck;
use App\Human;
use App\River;
use App\Tiger;

$animal = new Duck(5,'Mr Duck');
$storyTeller = (new AnimalStory($animal));
$storyTeller->tellStory();

$animal = new Human(10,'Mr Human');
$storyTeller = (new AnimalStory($animal));
$storyTeller->tellStory();

$animal = new Tiger(8,'Tiger');
$storyTeller = (new AnimalStory($animal));
$storyTeller->tellStory();

//human can cross the river
$human = new Human(14,'Mr Human(Swimmer)');
$river = (new River($human));
$river->cross();

//duck can cross the river
$human = new Human(2,'Mr Duck(Swimmer)');
$river = (new River($human));
$river->cross();

//as they have same contract human and duck both are crossing the river.

//We are passing a tiger here which has no swim abilities, so it can't cross the river. so the ide will show error
// $tiger = new Tiger(1,'Mr Tiger(Non Swimmer)');
// $river = (new River($tiger));
// $river->cross();