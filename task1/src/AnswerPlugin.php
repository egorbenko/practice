<?php

namespace task1;


class AnswerPlugin implements BoundObjectPlugin
{
    public function __invoke(array $params = [])
    {
        return $this->getAnswer();
    }

    public function getAnswer()
    {
        return 42;
    }
}