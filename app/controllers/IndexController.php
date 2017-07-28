<?php

namespace app\controllers;

use core\lib\Model;
use core\Phpmvc;

/**
 * Created by PhpStorm.
 * User: wangqiufa
 * Date: 2017/7/28
 * Description:
 */
class IndexController extends Phpmvc
{
    public function index()
    {
        //echo 'it is ok';
//        $model = new Model();
//        $sql = 'select * from user';
//        $query = $model->query($sql);
//        $rs = $query->fetchAll();
        $data = 'hh';
        $title = 'jjjj';

        $this->assign('data', $data);
        $this->assign('title', $title);
        $this->display('/index/index.html');
    }
}