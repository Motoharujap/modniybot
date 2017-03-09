<?php
namespace Handlers\Updates;

class MessageUpdate
{
    private $id;
    private $message;

    public function __construct($update)
    {
        $this->id = $update['id'];
        $this->message = $update['message'];
    }

    public function process()
    {

    }
}