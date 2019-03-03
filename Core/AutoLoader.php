<?php
/**
 * Created by PhpStorm.
 * User: 张腾飞
 * Date: 2019/3/3
 * Time: 18:41
 */

namespace Core;


class AutoLoader
{
    /**
     * 自动加载类方法
     * @param $class  //要加载的类名称
     */
    static function loader($class)
    {
        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}