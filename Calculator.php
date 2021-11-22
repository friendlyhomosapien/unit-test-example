<?php

namespace Calculator;

class Calculator
{
    public $rand;
    protected $calculation;
    public $spy;
    public $time;
    public function __construct()
    {
        require_once 'RandomGeneratorMock.php';
        $this->rand = InterGezicht\RandomGeneratorInterface::RANDOM_INT;
    }
    public function add($val_1, $val_2)
    {
        $result = $val_1 + $val_2;
        return $result;
    }
    public function subtract($val_1, $val_2)
    {
        $result = $val_1 - $val_2;
        return $result;
    }
    public function multiply($val_1, $val_2)
    {
        $result = $val_1 * $val_2;
        return $result;
    }
    public function divide($val_1, $val_2)
    {
        if (intval($val_1) === 0 || intval($val_2) === 0) {
            $this->newException('can\'t divide with 0');
        } else {
            $result = $val_1 / $val_2;
            return $result;
        }
    }
    public function currentTimePlus($value, $spy = null)
    {
        require_once 'TimeGenerator.php';
        $this->time = time() + $value;
        if ($spy) {
            $spy->store($this->time);
        }

        return $this->time;
    }
    public function random($val_1)
    {
        $mock = new Test\Mock\RandomGeneratorMock();
        return $mock->addRandom($val_1, $mock->getRandom());
    }

    public function newException($msg)
    {
        throw new \InvalidArgumentException($msg);
    }
}
