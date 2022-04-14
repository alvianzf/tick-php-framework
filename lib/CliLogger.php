<?php

namespace Tick;

class CliLogger
{
    public function out($message) {
        echo $message;
    }

    public function newline() {
        $this->out("\n");
    }

    public function display($message) {
        $this->newline();
        $this->out($message);
        $this->newline();
        $this->newline();
    }

    public function no_command($option) {
        $this->display("ERROR, command '$option' not found!");
    }
}