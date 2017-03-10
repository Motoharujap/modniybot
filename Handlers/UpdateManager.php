<?php

namespace Handlers;

use Handlers\Updates\MessageUpdate;

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