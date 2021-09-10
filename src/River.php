<?php

namespace App;

use App\Interfaces\RiverInterface;
use App\Interfaces\Swimable;
class River implements RiverInterface
{
    private Swimable $swimmer;

    /**
     * this class is helpful to crossing a river.. a swimmer can easily cross a river
     * so we are only passing the object
     * which has the knowledge to cross the river to instantiate the class
     * */
    public function __construct(Swimable $swimmer)
    {
        $this->swimmer = $swimmer;
    }

    public function cross(){
        $this->swimmer->swim().PHP_EOL;
        print 'So I am crossing the river'.PHP_EOL.PHP_EOL;
    }
}