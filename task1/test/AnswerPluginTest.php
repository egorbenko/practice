<?php

/**
 * Date: 18/11/15
 * Time: 10:31 PM
 */
class AnswerPluginTest extends PHPUnit_Framework_TestCase
{
    public function getAnswer_returns_42()
    {
        $answerPlugin = new \task1\src\AnswerPlugin();

        $answer = $answerPlugin->getAnswer();

        $this->assertEquals(42, $answer);
    }
}
