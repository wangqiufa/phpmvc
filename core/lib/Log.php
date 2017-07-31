<?php

namespace core\lib;

/**
 * Created by PhpStorm.
 * User: wangqiufa
 * Date: 2017/7/31
 * Description: 日志类
 */
class Log
{
    static $class;

    static public function init()
    {
        $drive = Config::get('drive', 'log');
        $class = '\core\lib\drive\log\\' . $drive;
        self::$class = new $class;
    }

    static public function log($name, $file = 'log')
    {
        self::$class->log($name, $file);
    }

}