<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('getTableID')) {
    function getTableID()
    {
        // get UTC date time
        $date = gmdate('Y-m-d H:i:s');
        // generate number: UNIX timestamp diconcat 3 random
        $id = strtotime($date) * 1000 + rand(0, 1000);
        return $id;
    }
}