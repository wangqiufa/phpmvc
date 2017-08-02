<?php

namespace core\lib;

use Medoo\Medoo;

/**
 * Created by PhpStorm.
 * User: wangqiufa
 * Date: 2017/7/28
 * Description: 模型
 */

class Model extends Medoo
{
    public function __construct()
    {
        $option = Config::getAll('database');
        parent::__construct($option);
    }
}