<?php

namespace Components\CustomObjects;

use Components\Helpers\DbHelper;
use Telegram\Bot\Objects\User;

class CustomUser extends User
{
    public function save()
    {
        $data = []; // todo
        DbHelper::getInstance()->saveFrom(DbHelper::USERS_TABLE, $data);
    }
}