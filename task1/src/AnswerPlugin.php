<?php

namespace task1;


class AnswerPlugin implements BoundObjectPlugin
{
    public function getAnswer()
    {
        return 42;
    }
}