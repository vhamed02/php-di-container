<?php

class Logger {
    public function log(string $type, string $message)
    {
        print sprintf('[%s]: %s', $type, $message) . '<br>';
    }
}