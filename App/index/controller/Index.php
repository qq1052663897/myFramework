<?php
/**
 * Created by PhpStorm.
 * User: 张腾飞
 * Date: 2019/3/3
 * Time: 18:29
 */

namespace App\index\controller;

class Index
{
    static function run()
    {
        print_r('my test run application!');
//        $stack = new \SplStack();
//        $stack->push('123');
//        $stack->push('456');
//        $little_one = $stack->pop();
//        var_dump($stack);
//        var_dump($little_one);
    }

    function cat()
    {
        echo "<br>" . 'I am a cat';
    }
}