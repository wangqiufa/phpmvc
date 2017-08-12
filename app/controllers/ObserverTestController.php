<?php

namespace app\controllers;

use app\behavior\observer\UserObserver;

/**
 * Created by PhpStorm.
 * User: wangqiufa
 * Date: 2017/8/12
 * Description:
 */

class ObserverTestController
{
    protected $observer;

    public function __construct()
    {
        $this->observer = new UserObserver();
    }

    public function index()
    {
        echo 333;
    }
}