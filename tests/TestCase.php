<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling;


abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;    
}