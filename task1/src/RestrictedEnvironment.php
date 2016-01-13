<?php


namespace task1;


class RestrictedEnvironment
{
    public function __construct($plugins)
    {
        $hashedPropertyContainer = spl_object_hash($this);
        $this->$hashedPropertyContainer = [
            'plugins' => $plugins
        ];
    }

    public function __call($name, $arguments)
    {
        $hashedPropertyContainer = spl_object_hash($this);
        if (array_key_exists($name, $this->$hashedPropertyContainer['plugins'])) {
            return $this->$hashedPropertyContainer['plugins'][$name]($arguments);
        }

        throw new \Exception("Plugin: '" . $name . "' not found.");
    }
}