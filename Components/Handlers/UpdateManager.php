<?php

namespace Components\Handlers;

use Components\Handlers\Updates\MessageUpdate;

class UpdateHandler
{
    public function processUpdate($update)
    {
        if (isset($update['message'])) {
            $handler = new MessageUpdate($update);
            $handler->handle();
        }
    }
}