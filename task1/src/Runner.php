<?php

namespace task1;


class Runner
{
    /**
     * @var BoundObjectPlugin[]
     */
    private $plugins = [];
    /**
     * @var Runner
     */
    private $runner;

    public function __construct()
    {
        $this->plugins = $this->newDefaultPlugins();
        $this->runner = $this->newRunnerInstance();
    }

    private function newRunnerInstance()
    {
        return new Runner();
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
        return $closure->call($this->runner);
    }
}