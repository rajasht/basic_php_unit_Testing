<?php

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase{
    
    /** @test */
    public function addition_of_two_numbers(){

        $a =10;
        $b =15;
        $c = $a + $b;
        $this->assertEquals($c,30);
    }
}

