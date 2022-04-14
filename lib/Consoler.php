<?php

namespace Tick;

/**
 * Console class is not like the name, is to have color coded breakpoints on
 * the PHP page The sole purpose is to check values and content of variables,
 * arrays, and objects inside the framework;
 */
class Console {
    
    /**
     * Log is used to print out data using var dump and <pre></pre>
     * It also stops the script running past this point
     * 
     */
    public function log($data) {
        $verbose = var_dump($data);
        echo("<pre>[$verbose]</pre>");
        exit;
    }
}