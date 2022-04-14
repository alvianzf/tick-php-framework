<?php

namespace Tick;

class App
{
    protected $logger;

    public function __construct() {
        $this->logger = new CliLogger();
    }

    public function runCommand(array $argv){
        $name = "World";

        if(isset($argv[1])) {
            $name = $argv[1];
        }

        $this->logger->display("Hello $name!!!");
    }
}