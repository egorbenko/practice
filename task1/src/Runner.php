<?php

namespace task1;


class Runner
{
    /**
     * @var BoundObjectPlugin[]
     */
    private $plugins = [];
    private $strategy;
    private $executed = false;

    public function __construct()
    {
        $this->plugins = $this->newDefaultPlugins();
        $this->strategy = function() {
            $this->logGreeting("hello world");
            $this->execute($this->strategy);
            return $this->getAnswer() === 42;
        };
    }

    public function __call($name, $arguments)
    {
        if (array_key_exists($name, $this->plugins)) {
            return $this->plugins[$name]($arguments);
        }

        throw new \Exception("Plugin: '" . $name . "' not found.");
    }

    private function newDefaultPlugins()
    {
        $plugins  = [
            'getAnswer' => new AnswerPlugin(),
            'logGreeting' => new GreeterPlugin(),
        ];

        return $plugins;
    }

    public function execute(\Closure $closure)
    {
        if ($this->executed) {
            throw new \Exception("Endless recursion");
        }
        $this->executed = true;
        return $closure->call($this);
    }

    public function getClosure()
    {
        return $this->strategy;
    }
}