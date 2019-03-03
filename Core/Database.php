<?php
/**
 * Created by PhpStorm.
 * User: 张腾飞
 * Date: 2019/3/3
 * Time: 22:55
 */

namespace Core;


class Database
{
    //声明一个私有静态变量保存实例
    static private $Db;
    //声明一个私有变量保存配置参数
    private $config;

    /**
     * Database constructor.
     * @param $config
     */
    private function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * @param $config
     * @return Database
     */
    static function getInstance($config)
    {
        if(!self::$Db instanceof self){
            self::$Db = new self($config);
        }
        return self::$Db;
    }

    /**
     * clone The Singleton class is not allowed
     */
    function __clone()
    {
        trigger_error('it\'s not allowed');
    }

    /**
     * DB where() 方法
     * @return $this
     */
    function where()
    {
        return $this;
    }

    /**
     * Db order 排序
     * @return $this
     */
    function order()
    {
        return $this;
    }

    /**
     * Db limit 分页
     * @return $this
     */
    function limit()
    {
        return $this;
    }
}