<?php
/**
 * Created by PhpStorm.
 * User: 张腾飞
 * Date: 2019/3/3
 * Time: 23:09
 */

namespace Core;


class Factory
{
    static function createDatabase()
    {
        Register::set('Db',Database::getInstance(1));
    }
}