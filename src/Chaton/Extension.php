<?php

namespace Chaton;

use Chaton\Model\Message;

class Extension
{
    public function filterInput(Message $message)
    {
        return $message;
    }

    public function handle(Message $message) : bool
    {
        return false;
    }

    public function filterOutput(Message $message)
    {
        return $message;
    }
}