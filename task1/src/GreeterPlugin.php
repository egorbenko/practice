<?php

namespace task1;


class GreeterPlugin implements BoundObjectPlugin
{
    public function __invoke(array $greeting = [])
    {
        $this->logGreeting($greeting[0]);
    }

    public function logGreeting($greeting)
    {
        echo $greeting;
    }
}