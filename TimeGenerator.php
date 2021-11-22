<?php

namespace Calculator\Gen;

class TimeGenerator
{

    public $item = null;

    public function store($time)
    {
        $this->item = $time;
        return true;
    }
}
