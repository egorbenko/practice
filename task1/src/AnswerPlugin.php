<?php

namespace task1;


class AnswerPlugin implements BoundObjectPlugin
{
    public function __invoke(array $params = null)
    {
        return $this->getAnswer();
    }

    public function getAnswer()
    {
        return 42;
    }
}