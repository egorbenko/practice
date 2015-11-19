<?php

class AnswerPluginTest extends PHPUnit_Framework_TestCase
{
    public function getAnswer_returns_42()
    {
        $answerPlugin = new \task1\src\AnswerPlugin();

        $answer = $answerPlugin->getAnswer();

        $this->assertEquals(42, $answer);
    }
}
