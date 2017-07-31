<?php

namespace core\lib;

/**
 * Created by PhpStorm.
 * User: wangqiufa
 * Date: 2017/7/28
 * Description: 配置类
 */

class Config
{
    static public $config = [];

    static public function get($name, $file)
    {
        if (isset(self::$config[$file])) {
            return self::$config[$file][$name];
        } else {
            $fileNew = PHPMVC . '/core/config/' . $file . '.php';
            if (is_file($fileNew)) {
                $conf = include $fileNew;
                if (isset($conf[$name])) {
                    self::$config[$file] = $conf;
                    return $conf[$name];
                } else {
                    throw new \Exception('找不到该配置项' . $name);
                }
            } else {
                throw new \Exception('找不到配置文件' . $file);
            }
        }
    }
}