<?php
/**
 * Created by PhpStorm.
 * User: 张腾飞
 * Date: 2019/3/4
 * Time: 0:20
 * 注册树 将实例化过的对象保存在树中直接调用
 */

namespace Core;


class Register
{
    //声明一个保存以实例化过的类的树
    static private $trees;

    /**
     * @param $alias
     * @param $obj
     */
    static function set($alias,$obj)
    {
        self::$trees[$alias] = $obj;
    }

    /**
     * @param $name
     * @return mixed
     */
    static function get($name)
    {
        return self::$trees[$name];
    }

    /**
     * @param $name
     */
    static function _unset($name)
    {
        unset(self::$trees[$name]);
    }
}