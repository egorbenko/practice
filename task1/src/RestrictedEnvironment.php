<?php


namespace task1;


class RestrictedEnvironment
{
    private $plugins;

    public function __construct($plugins)
    {
        $this->plugins = $plugins;
    }
}