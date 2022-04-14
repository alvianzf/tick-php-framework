<?php

namespace Tick;

class App
{
    public function runCommand(array $argv){
        $name = "World";

        if(isset($argv[1])) {
            $name = $argv[1];
        }

        echo "Hello $name!!!\n";
    }
}