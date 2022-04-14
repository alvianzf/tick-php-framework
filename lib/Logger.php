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

    /**
     * Verbose is used to print out data using var dump and <pre></pre>
     * It also stops the script running past this point
     * 
     */
    public function verbose($data) {
        $verbose = var_dump($data);
        echo("<pre>$verbose</pre>");
        exit;
    }
}
