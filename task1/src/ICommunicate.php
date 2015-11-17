<?php
/**
 * Created by PhpStorm.
 * User: efim
 * Date: 17/11/15
 * Time: 10:11 AM
 */

namespace task1\src;


interface ICommunicate
{
    public function logGreeting($greeting);
    public function getAnswer();
}