<?php

namespace task1\src;


class Logger extends CommunicatorAbstract
{

    public function logGreeting($greeting)
    {
        echo $greeting;
    }
}