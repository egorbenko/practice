<?php

namespace task1;


class GreeterPlugin implements BoundObjectPlugin
{
    public function logGreeting($greeting)
    {
        echo $greeting;
    }
}