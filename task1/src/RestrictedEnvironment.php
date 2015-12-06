<?php


namespace task1;


class RestrictedEnvironment
{
    private $plugins;

    public function __construct($plugins)
    {
        $this->plugins = $plugins;
    }

    public function __call($name, $arguments)
    {
        if (array_key_exists($name, $this->plugins)) {
            return $this->plugins[$name]($arguments);
        }

        throw new \Exception("Plugin: '" . $name . "' not found.");
    }
}