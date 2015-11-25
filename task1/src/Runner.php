<?php

namespace task1;


class Runner
{
    /**
     * @var BoundObjectPlugin[]
     */
    private $plugins = [];

    public function __construct()
    {
        $this->plugins = $this->newDefaultPlugins();
    }

    public function __call($name, $arguments)
    {
        $this->plugins[$name]($arguments);
    }

    private function newDefaultPlugins()
    {
        $plugins  = [
            'answerPlugin' => new AnswerPlugin(),
            'greeterPlugin' => new GreeterPlugin(),
        ];

        return $plugins;
    }

    public function execute(\Closure $closure)
    {
        return $closure->call($this);
    }
}