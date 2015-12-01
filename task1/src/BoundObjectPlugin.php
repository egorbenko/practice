<?php

namespace task1;

interface BoundObjectPlugin
{
    public function __invoke(array $params = []);
}