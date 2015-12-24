<?php


namespace task1;


class RestrictedEnvironment
{
    private $plugins;

    public function __construct($plugins)
    {
        $this->plugins = [
            spl_object_hash($this) => $plugins
        ];
    }

    public function __call($name, $arguments)
    {
        $hash = spl_object_hash($this);
        if (array_key_exists($name, $this->plugins[$hash])) {
            return $this->plugins[$hash][$name]($arguments);
        }

        throw new \Exception("Plugin: '" . $name . "' not found.");
    }
}