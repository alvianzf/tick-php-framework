<?php

namespace Tick;
/**
 * Before I start a war, this is the API Library (APIlib)
 * the purpose it to make API management easier for Ancient PHP Users
 * like myself
 * 
 */
class Apilib
{
    protected $session_active;

    public function __construct()
    {
        $this->log = new Logger();
    }

    public function get($message) {
        $this->log->success($message);
    }
}