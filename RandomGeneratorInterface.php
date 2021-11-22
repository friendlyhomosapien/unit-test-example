<?php

namespace Calculator\InterGezicht;

interface RandomGeneratorInterface
{
    public const RANDOM_INT = 5;
    public function getRandom();
    public function addRandom($input, $random_int);
}
