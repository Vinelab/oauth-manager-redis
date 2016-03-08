<?php

namespace Vinelab\Redis;

use Vinelab\Redis\Keys\OAuthKey;

/**
 * @author Kinane Domloje <kinane@vinelab.com>
 */
class RedisKeysManager
{
    public function makeKey()
    {
        $key = OAuthKey::make();
        foreach (func_get_args() as $arg) {
            $key->add($arg);
        }

        return (string) $key;
    }
}
