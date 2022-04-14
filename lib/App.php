<?php

namespace Tick;

class App
{

    /**
     * Logger to log every important things onto the console
     * 
     */
    protected $logger;

    /**
     * Registers the scripts that will be used for the CLI
     * 
     */
    protected $commands = ["port" => "port", "ping" => "ping", "help" => "help"];

    public function __construct() {
        $this->logger = new CliLogger();
    }

    /**
     * access the protected $commands variable and test whether
     * the object is available on the registry
     * 
     */
    public function get_command($command) {
        return isset($this->commands[$command]) ? $command : null;
    }

    /**
     * Reads cli line and match them to pre-defined scripts
     * 
     */

    public function run_tick_commands(array $argv){

        if(isset($argv[1])) {
            $option = $argv[1];

            /**
             * Checks if command is on the registry
             * 
             */
            if ($this->get_command($option)) {

                /**
                 * Switch case to run selected commands
                 * 
                 */
                switch ($option) {
                    case 'ping':
                        $this->logger->display("pong!");
                        break;

                    case 'port':
                        $port_number = @$argv[2] ? $argv[2] : 8080;

                        shell_exec("php -S localhost:$port_number");

                        break;
                    
                    default:
                        # code...
                        break;
                }
            } else {

                /**
                 * Logs error if command is not found
                 * 
                 */
                $this->logger->no_command($option);
            }
        }
    }
}