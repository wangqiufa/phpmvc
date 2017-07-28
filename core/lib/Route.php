<?php

namespace core\lib;

/**
 * 路由类
 */

class Route
{
    public $controller;
    public $method;

    public function __construct()
    {
        if (isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            $requestUrl = $_SERVER['REQUEST_URI'];
            $requestUrlArr = explode('/', trim($requestUrl, '/'));

            if (isset($requestUrlArr[0])) {
                $this->controller = $requestUrlArr[0];
            }
            unset($requestUrlArr[0]);

            if (isset($requestUrlArr[1])) {
                $this->method = $requestUrlArr[1];
                unset($requestUrlArr[1]);
            } else {
                $this->method = 'index';
            }

            $count = count($requestUrlArr) + 2;
            $i = 2;
            while ($i < $count) {
                if (isset($requestUrlArr[$i + 1])) {
                    $_GET[$requestUrlArr[$i]] = $requestUrlArr[$i + 1];
                }
                $i = $i +2;
            }

        } else {
            $this->controller = 'index';
            $this->method = 'index';
        }
    }
}

