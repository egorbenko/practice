<?php

namespace task1;


class Runner
{
    /**
     * @var BoundObjectPlugin[]
     */
    private $plugins = [];
    private $restrictedEnvironment;

    public function __construct()
    {
        $this->plugins = $this->newDefaultPlugins();
        $this->restrictedEnvironment = $this->newRestrictedEnvironment();
    }

    private function newDefaultPlugins()
    {
        $plugins  = [
            'getAnswer' => new AnswerPlugin(),
            'logGreeting' => new GreeterPlugin(),
        ];

        return $plugins;
    }

    private function newRestrictedEnvironment()
    {
        return new RestrictedEnvironment($this->plugins);
    }

    public function execute(\Closure $closure)
    {
        return $closure->call($this->restrictedEnvironment);
    }
}