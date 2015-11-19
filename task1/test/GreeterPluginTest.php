<?php

class GreeterPluginTest extends PHPUnit_Framework_TestCase
{
    public function log_greeting_echoes_message()
    {
        $message = 'hello, world!';
        $greeterPlugin = new \task1\src\GreeterPlugin();
        $greeterPlugin->logGreeting($message);

        $this->expectOutputString($message);
    }
}
