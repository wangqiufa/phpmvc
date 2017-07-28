<?php

if (!function_exists('p')) {
    function p($var)
    {
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}
