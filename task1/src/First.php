<?php

namespace task1\src;


class First extends AbstractClass
{

    /**
     * @param string $someString
     */
    public function logGreeting(string $someString)
    {
        echo $someString;
    }
}