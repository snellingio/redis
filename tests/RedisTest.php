<?php


class RedisTest extends PHPUnit_Framework_TestCase
{
    public function testIsThereAnySyntaxError()
    {
        $var = new Snelling\Redis;
        $this->assertTrue(is_object($var));
        unset($var);
    }
}