<?php

namespace core\lib\drive\log;

use core\lib\Config;

/**
 * Created by PhpStorm.
 * User: wangqiufa
 * Date: 2017/7/31
 * Description:
 */

class File
{
    public $path;

    public function __construct()
    {
        $this->path = Config::get('path', 'log');
    }

    public function log($message, $file = 'log')
    {
        $logPath = $this->path . date('Ymd') . '/';
        if (!is_dir($logPath)) {
            mkdir($logPath, '0777', true);
        }

        $message = date('Y-m-d H:i:s') . ' - ' . json_encode($message) . PHP_EOL;
        $filePath = $logPath . $file . date('H') . '.log';
        return file_put_contents($filePath, $message, FILE_APPEND);
    }
}