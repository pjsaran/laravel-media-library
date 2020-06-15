<?php

namespace Pjsaran\LaravelMediaLibrary\Tests;

use Orchestra\Testbench\TestCase;
use Pjsaran\LaravelMediaLibrary\LaravelMediaLibraryServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelMediaLibraryServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
