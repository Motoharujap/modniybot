<?php

namespace Components;

use Components\Commands\StatisticCommand;
use Telegram\Bot\Api;
use Telegram\Bot\Objects\Update;

class UpdateManager
{
    private $telegram;

    public function processUpdate($update)
    {
        $update = new Update($update);
        $this->getApi()->processCommand($update);
        $this->handleUpdate($update);
    }

    public function getApi()
    {
        if(!$this->telegram){
            $this->telegram = new Api(getenv('BOT_TOKEN'));
            $this->telegram->addCommands([
                StatisticCommand::class,
            ]);
        }

        return $this->telegram;
    }

    public function handleUpdate($update)
    {

    }
}