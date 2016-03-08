<?php

namespace Vinelab\Redis\Tests;

use PHPUnit_Framework_TestCase;
use Vinelab\Redis\RedisKeysManager;

class RedisKeysManagerTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->manager = new RedisKeysManager();

        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    public function test_redis_keys_manager()
    {
        $key = $this->manager->makeKey('refresh', 'soul', '12345');

        $this->assertEquals($key, 'oauth:refresh:soul:12345');
    }
}
