<?php
/**
 * Created by PhpStorm.
 * User: 张腾飞
 * Date: 2019/3/3
 * Time: 18:08
 */
define('BASEDIR',__DIR__.'/../');
//require the AutoLoader.php to start app
include BASEDIR.'Core/AutoLoader.php';
//auto run spl_autoload_register() to loader class
spl_autoload_register("\\Core\\AutoLoader::loader");

//\Core\Core::go_on();
//\App\index\Controller\Index::run();
\Core\Factory::createDatabase();
var_dump(\Core\Register::get('Db'));