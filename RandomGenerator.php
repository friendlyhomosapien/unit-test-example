<?php

namespace Calculator\Gen;

use Calculator\InterGezicht\RandomGeneratorInterface;

class RandomGenerator implements RandomGeneratorInterface
{
    public function getRandom()
    {
        return rand(0, 10);
    }
    public function addRandom($input, $random_int)
    {
        return $input + $random_int;
    }
}
