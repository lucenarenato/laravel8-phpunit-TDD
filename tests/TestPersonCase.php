<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling;


abstract class TestPersonCase extends BaseTestCase
{
    use CreatesApplication;

    // estes metodos foram usados no ComposerTest
    protected $root;

    protected function setUp()
    : void {
        $this->root = dirname(dirname(substr(__DIR__, -strlen(__NAMESPACE__))));
    }
    
}