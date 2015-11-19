<?php

namespace task1;


class Runner
{
    /**
     * @var BoundObjectPlugin[]
     */
    private $plugins = [];

    public function __construct(ICommunicate $plugin)
    {

    }

    public function execute(\Closure $closure)
    {

    }
}