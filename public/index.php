<?php

/**
 * 入口文件
 */

// 定义常量
define('PHPMVC', realpath('../'));
define('CORE', PHPMVC . '/core');
define('APP', PHPMVC . '/app');
define('MODULE', 'app');
define('DEBUG', true);

include "../vendor/autoload.php";

// 定义开发环境
if (DEBUG) {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}

// 加载函数库
include CORE . '/common/function.php';

// 启动框架
include CORE . '/Phpmvc.php';

spl_autoload_register('\core\Phpmvc::load');

\core\phpmvc::run();