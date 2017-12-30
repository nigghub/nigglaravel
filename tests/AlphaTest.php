<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AlphaTest extends TestCase
{
    public function testDisplaysAlpha()
    {
        $this->visit('/alpha')
            ->see('Alpha')
            ->dontSee('Beta');
    }
}
