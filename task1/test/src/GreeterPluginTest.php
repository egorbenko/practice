<?php

class GreeterPluginTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function log_greeting_echoes_message()
    {
        $message = 'hello world';
        $greeterPlugin = new \task1\GreeterPlugin();
        $greeterPlugin->logGreeting($message);

        $this->expectOutputString($message);
    }
}
