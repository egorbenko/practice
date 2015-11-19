<?php

class AnswerPluginTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function getAnswer_returns_42()
    {
        $answerPlugin = new \task1\AnswerPlugin();

        $answer = $answerPlugin->getAnswer();

        $this->assertEquals(42, $answer);
    }
}
