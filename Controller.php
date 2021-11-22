<?php

namespace Calculator;

class Controller
{
    private $reg;
    public $values = [];
    public $method;

    public function __construct()
    {
        require 'Calculator.php';
        require 'RandomGenerator.php';
        $this->reg = '/(?<val>\d+)/';
        $this->checkValue(0);
        $this->checkMethod();
        if (intval($this->method) !== 4) {
            $this->checkValue(1);
        }
        $this->prepareMethod();
    }
    private function checkMethod()
    {
        $match = false;
        while ($match === false) {
            echo '0: add' . PHP_EOL .
                '1: substract' .
                PHP_EOL .
                '2: multiply' .
                PHP_EOL .
                '3: divide' .
                PHP_EOL .
                '4: add random' .
                PHP_EOL .
                '5: add to current time' .
                PHP_EOL;
            $method = readline('pick method number: ');
            if (preg_match($this->reg, $method) && intval($method) <= 5 && intval($method) >= 0) {
                $match = true;
                $this->method = intval($method);
            } else {
                echo PHP_EOL . 'method not available' . PHP_EOL;
            }
        }
    }
    private function prepareMethod()
    {
        $calc = new Calculator();
        if ($this->method === 0) {
            echo $calc->add($this->values[0], $this->values[1]);
        }
        if ($this->method === 1) {
            echo $calc->subtract($this->values[0], $this->values[1]);
        }
        if ($this->method === 2) {
            echo $calc->multiply($this->values[0], $this->values[1]);
        }
        if ($this->method === 3) {
            echo $calc->divide($this->values[0], $this->values[1]);
        }
        if ($this->method === 4) {
            echo $calc->random($this->values[0]);
        }
        if ($this->method === 5) {
            echo $calc->currentTimePlus($this->values[0]);
        }
    }
    private function checkValue($i)
    {
        $value = readline('value: ');
        if (!preg_match($this->reg, $value)) {
            echo 'invalid input, the input needs to be a number dummy' . PHP_EOL;
            $this->checkValue($i, $value);
        } else {
            $this->values[$i] = $value;
        }
    }
}
