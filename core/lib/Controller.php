<?php

namespace core\lib;

use core\Phpmvc;

/**
 * Created by PhpStorm.
 * User: wangqiufa
 * Date: 2017/8/12
 * Description: 控制器
 */

class Controller
{
    public $assign;

    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    public function display($file)
    {
        $filePath = APP . '/views/' . $file;
        if (is_file($filePath)) {
            $loader = new \Twig_Loader_Filesystem(APP . '/views');
            $twig = new \Twig_Environment($loader, array(
                'cache' => PHPMVC . '/log/twig',
                'debug' => DEBUG
            ));
            $template = $twig->load($file);
            $template->display($this->assign ? $this->assign : []);
        }
    }
}