<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Factorial.php';

class FactorialTest extends TestCase
{   
    public function testFactorialOfZero()
    {
        $this->assertEquals(1, factorial(0));
    }
    
    public function testFactorialOfOne()
    {
        $this->assertEquals(1, factorial(1));
    }

    public function testFactorialOfFive()
    {
        $this->assertEquals(120, factorial(5));
    }

    public function testFactorialOfRandomInt()
    {
        $randomInt = rand(4, 10);
        $this->assertEquals(factorial($randomInt), factorial($randomInt - 1) * $randomInt);
    }

    public function testFactorialOfNegativeNumber()
    {
        $this->assertNull(factorial(-3));
    }

    public function testFactorialOfFloat()
    {
        $this->assertNull(factorial(1.5));
    }

    public function testFactorialOfFalse()
    {
        $this->assertNull(factorial(false));
    }

    public function testFactorialOfString()
    {
        $this->assertNull(factorial('abc'));
    }
}
?>
