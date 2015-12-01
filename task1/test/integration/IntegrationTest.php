<?php

use task1\Runner;

class IntegrationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * This is the first big integration test.
     *
     * @tests
     */
    public function the_runner_can_execute_a_closure_with_a_fake_this_object()
    {
        $runner = new Runner();

        $evaluation = $runner->execute($runner->getClosure());

        $this->assertTrue($evaluation);
    }
}
