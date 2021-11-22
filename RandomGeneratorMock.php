<?php

namespace Calculator\Test\Mock;

require_once 'RandomGeneratorInterface.php';

use Calculator\InterGezicht\RandomGeneratorInterface;

class RandomGeneratorMock implements RandomGeneratorInterface
{
    public function getRandom()
    {
        return RandomGeneratorInterface::RANDOM_INT;
    }
    public function addRandom($input, $random_int)
    {
        return $input + $random_int;
    }
}
