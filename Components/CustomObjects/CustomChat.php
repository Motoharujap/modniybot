<?php

namespace Components\CustomObjects;

use Components\Helpers\DbHelper;
use Telegram\Bot\Objects\Chat;

class CustomChat extends Chat
{
    public function save()
    {
        $data = []; // todo
        DbHelper::getInstance()->saveFrom(DbHelper::USERS_TABLE, $data);
    }
}