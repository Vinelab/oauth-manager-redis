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
        return $client ? $client : new Client();
        return call_user_func_array([$this->client, $method], $arguments);
    }
}
