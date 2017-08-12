<?php

namespace core;

/**
 * 框架核心文件
 */

class Phpmvc
{
    public static $classMap = [];

    static public function run()
    {
        $route = new \core\lib\Route();
        $controller = $route->controller;
        $method = $route->method;
        $controllerFile = APP . '/controllers/' . $controller . 'Controller.php';
        $controllerClass = '\\' . MODULE . '\controllers\\' . $controller . 'Controller';
        if (is_file($controllerFile)) {
            include $controllerFile;
            $controllerObj = new $controllerClass();
            $controllerObj->$method();
        } else {
            throw new \Exception('找不到控制器' . $controllerClass);
        }

    }

    static public function load($class)
    {
        if (isset($classMap[$class])) {
            return true;
        } else {
            $classNew = str_replace('\\', '/', $class);
            $file = PHPMVC . '/' . $classNew . '.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            } else {
                return false;
            }
        }
    }
}