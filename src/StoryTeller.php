<?php

require 'vendor/autoload.php';
use App\AnimalStory;
use App\Duck;
use App\Human;
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
