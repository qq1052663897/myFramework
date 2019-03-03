<?php
/**
 * Created by PhpStorm.
 * User: 张腾飞
 * Date: 2019/3/3
 * Time: 23:32
 */

namespace Core;


class Redis
{
    static private $redis;
    private $config;

    /**
     * Redis constructor.
     * @param $config
     */
    private function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * @param $config
     * @return Redis
     */
    static function getRedis($config)
    {
        if(!self::$redis instanceof self){
            self::$redis = new self($config);
        }
        return self::$redis;
    }

    /**
     * clone the Singleton class is not allowed
     */
    function __clone()
    {
        trigger_error('it\'s not allowed');
    }
}