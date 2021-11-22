<?php

namespace Calculator\Test\Mock;

use Calculator\InterGezicht\TimeRepositoryInterface;

class TimeGeneratorMock implements TimeRepositoryInterface
{
    public $time = null;

    public function store($time)
    {
        $this->time = $time;
    }

    public function getTime()
    {
        return time();
    }
}
