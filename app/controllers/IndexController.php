<?php

namespace app\controllers;

use core\lib\Controller;

/**
 * Created by PhpStorm.
 * User: wangqiufa
 * Date: 2017/7/28
 * Description: 控制器
 */
class IndexController extends Controller
{
    public function index()
    {
        $title = '后台首页';

        $this->assign('title', $title);
        $this->assign('data', '6666');
        $this->display('index/index.html');
    }
}