<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Faker\Factory as Faker;
use PHPUnit\Framework\MockObject\BadMethodCallException;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    // estes metodos foram usados no ComposerTest
    protected $root;

    protected function setUp()
    : void {
        $this->root = dirname(dirname(substr(__DIR__, -strlen(__NAMESPACE__))));
    }
    
}
