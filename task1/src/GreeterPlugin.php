<?php

namespace task1;


class GreeterPlugin implements BoundObjectPlugin
{
    public function __invoke(array $greeting = null)
    {
        $this->logGreeting($greeting);
    }

    public function logGreeting($greeting)
    {
        echo $greeting;
    }
}