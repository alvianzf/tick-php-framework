<?php

namespace Tick;

class App
{
    protected $logger;
    protected $commands = ["port" => "port", "ping" => "ping"];

    public function __construct() {
        $this->logger = new CliLogger();
    }
    public function get_command($command) {
        return isset($this->commands[$command]) ? $command : null;
    }

    public function run_tick_commands(array $argv){

        if(isset($argv[1])) {
            $option = $argv[1];

            if ($this->get_command($option)) {
                $this->logger->display("OK");
            } else {
                $this->logger->no_command($option);
            }
        }
    }
}