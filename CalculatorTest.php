<?php

namespace Calculator\Test;

use Mockery as Mock;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        require_once 'Calculator.php';
        //Act
        $mock = Mock::mock('Calculator');
        //Add
        $mock->shouldReceive('add')->once()->andReturn(3);
        //Assert
        $this->assertEquals(3, $mock->add(1, 2));
    }
    public function testSubstract()
    {
        require_once 'Calculator.php';
        //Act
        $mock = Mock::mock('Calculator');
        //Add
        $mock->shouldReceive('substract')->once()->andReturn(2);
        //Assert
        $this->assertEquals(2, $mock->substract(4, 2));
    }
    public function testMultiply()
    {
        require_once 'Calculator.php';
        //Act
        $mock = Mock::mock('Calculator');
        //Add
        $mock->shouldReceive('multiply')->once()->andReturn(6);
        //Assert
        $this->assertEquals(6, $mock->multiply(2, 3));
    }
    public function testDivide()
    {
        require_once 'Calculator.php';
        //Act
        $mock = Mock::mock('Calculator');
        //Add
        $mock->shouldReceive('divide')->once()->andReturn(3);
        //Assert
        $this->assertEquals(3, $mock->divide(6, 2));
    }
    public function testRandom()
    {
        require_once 'Calculator.php';
        //Act
        $mock = Mock::mock('Calculator');
        //Add
        $mock->shouldReceive('random')->once()->andReturn(6);
        //Assert
        $this->assertEquals(6, $mock->random(1));
    }
    public function testCurrentTimePlus()
    {
        require_once 'Calculator.php';
        require_once 'TimeGenerator.php';
        $spy = Mock::spy('TimeGenerator');

        $sut = new \Calculator\Calculator();

        $time = $sut->currentTimePlus(5, $spy);

        $spy->shouldHaveReceived()
            ->store($time)
            ->once();

        $this->assertEquals($time, $sut->time);
    }
}
