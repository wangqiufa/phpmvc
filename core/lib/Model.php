<?php

namespace core\lib;

/**
 * Created by PhpStorm.
 * User: wangqiufa
 * Date: 2017/7/28
 * Description: 模型
 */

class Model extends \PDO
{
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=test';
        $username = 'root';
        $passwd = '123456';

        try{
            parent::__construct($dsn, $username, $passwd);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }

    }


}