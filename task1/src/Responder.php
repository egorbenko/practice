<?php

namespace task1\src;


class Responder extends CommunicatorAbstract
{
    public function getAnswer()
    {
        return 42;
    }
}