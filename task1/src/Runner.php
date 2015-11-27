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

    public function __call($name, $arguments = null)
    {
        foreach ($this->plugins as $plugin) {
            if (method_exists($plugin, $name)) {
                $plugin($arguments);
            }
        }

    }

    private function newDefaultPlugins()
    {
        $plugins  = [
            'AnswerPlugin' => new AnswerPlugin(),
            'GreeterPlugin' => new GreeterPlugin(),
        ];

        return $plugins;
    }

    public function execute(\Closure $closure)
    {
        return $closure->call($this);
    }
}