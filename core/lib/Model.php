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
        $databaseConfig = Config::getAll('database');

        try{
            parent::__construct($databaseConfig['dsn'], $databaseConfig['username'], $databaseConfig['password']);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }


}