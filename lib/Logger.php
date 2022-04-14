<?php

namespace Tick;

/**
 * Logger class to make logging things more elegant
 * no more messy echoes!
 * 
 * Color guide:
 * success: green font, no background colot
 * warning: red font, white background
 * error: white font, red backround
 * 
 */
class Logger
{

    /**
     * These four are echo colors
     * because, why not?
     * 
     * PS: Works on console only.
     * To be used solely on tick document, otherwise, it'll look real weird
     */
    public function error($message)
    {
        echo "\e[1;37;41m$message\e[0m\n";
    }

    public function warning($message)
    {
        echo "\e[0;31;47m$message\e[0m\n";
    }

    public function success($message)
    {
        echo "\e[0;32m$message\e[0m\n";
    }

    public function display($message)
    {
        echo $message . PHP_EOL;
    }
}
