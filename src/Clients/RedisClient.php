<?php

namespace Vinelab\Redis\Clients;

use Predis\Client;
use Vinelab\Redis\Interfaces\RedisClientInterface;

/**
 * @author Kinane Domloje <kinane@vinelab.com>
 */
class RedisClient implements RedisClientInterface
{
    public function __construct ($client = null)
    {
        return $client ? new Client() : $client;
    }
}
