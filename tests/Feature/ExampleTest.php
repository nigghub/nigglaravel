<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
            ->see('Laravel 5');

        $this->visit('/beta')
            ->see('This is the Beta page.');

//        $this->visit('/add')
//            ->see('Your Result');

    }


}
