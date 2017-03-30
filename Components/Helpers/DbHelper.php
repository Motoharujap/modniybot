<?php

namespace Components\Helpers;

use SimpleCrud\SimpleCrud;

class DbHelper
{
    private static $instance;

    private $db;

    public static function getInstance()
    {
        if(!self::$instance){
            $obj = self::$instance = new self();
            $obj->db = new SimpleCrud(new \PDO('sqlite:'.STORAGE_PATH.'/database/main.sq3'));
        }

        return self::$instance;
    }

}