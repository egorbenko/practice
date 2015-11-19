<?php

use task1\Runner;

class IntegrationTest extends \PHPUnit_Framework_TestCase
{

    /**
     * This is the first big integration test.
     *
     * @test
     */
    public function the_runner_can_execute_a_closure_with_a_fake_this_object()
    {
        $runner = new Runner();
        $strategy = function() {
            $this->logGreeting("hello world");
            return $this->getAnswer() === 42;
        };
        $evaluation = $runner->execute($strategy);

        $this->assertTrue($evaluation);
    }
}
