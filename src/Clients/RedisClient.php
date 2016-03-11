<?php

namespace Vinelab\Redis\Clients;

use Predis\Client;
use Vinelab\Redis\Interfaces\RedisClientInterface;

/**
 * @author Kinane Domloje <kinane@vinelab.com>
 */
class RedisClient implements RedisClientInterface
{
    private $client;

    public function __construct ($client = null, string $host = '127.0.0.1', int $port = 6379)
    {
        $this->client =  $client ? $client : new Client(['host' => $host, 'port' => $port]);
    }

    /**
     * Magic method.
     *
     * @param string method
     * @param array  arguments
     *
     * @return Predis\Response\Status | exception | array
     */
    public function __call($method, $arguments)
    {
        return call_user_func_array([$this->client, $method], $arguments);
    }
}
