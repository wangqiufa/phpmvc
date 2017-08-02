<?php

namespace app\controllers;

use core\lib\Config;
use core\lib\Log;
use core\lib\Model;
use core\Phpmvc;

/**
 * Created by PhpStorm.
 * User: wangqiufa
 * Date: 2017/7/28
 * Description: 控制器
 */
class IndexController extends Phpmvc
{
    public function index()
    {
//        Log::init();
//        Log::log('3');
//        echo 'it is ok';
//        $model = new Model();
//        $sql = 'select * from user';
//        $query = $model->query($sql);
//        $rs = $query->fetchAll();
//        var_dump($rs);exit;
//        $data = 'ee';
//        $title = 'tttt';
//
//        $this->assign('data', $data);
//        $this->assign('title', $title);
//        $this->display('/index/index.html');

        dump($_SERVER);
    }
}