<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    /**
     * @test
     */
    public function pageTitleShouldReturnCorrectTitleIfTitleIsEmpty()
    {
        $this->assertEquals("Laracarte", pageTitle(''));
    }

    public function pageTitleShouldReturnCorrectTitleIfTitleIsProvided()
    {
        $this->assertEquals('about | Laracarte', pageTitle('about'));
    }
}