<?php
namespace App;
use App\Interfaces\AnimalStoryInterface;

class AnimalStory implements AnimalStoryInterface
{
    private Animal $animal;

    public function __construct(Animal $animal)
    {
        $this->animal = $animal;
    }

    public function tellStory(){
        print 'Every animal has a different story to tell. Lets see story from different animals by asking questions'.PHP_EOL;

        print 'Whats your name?'.PHP_EOL;
        print '- My name is '.$this->animal->getName().PHP_EOL;PHP_EOL;

        print 'How old are your?'.PHP_EOL;
        print '- Im '.$this->animal->getAge().' years old'.PHP_EOL;PHP_EOL;

        print 'What do you do in life?'.PHP_EOL;
        print '- I do things in life like... '.PHP_EOL;
        $this->animal->eat();
        $this->animal->sleep();
        $this->animal->live().PHP_EOL;

        print 'Tell me about your special abilities?'.PHP_EOL;
        $this->animal->specialAbilities();

        print PHP_EOL.PHP_EOL;

    }
}