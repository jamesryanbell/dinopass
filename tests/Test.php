<?php

namespace JamesRyanBell\Dinopass\Test;

use JamesRyanBell\Dinopass\Password;

class Test extends \PHPUnit_Framework_TestCase
{

    public function testSimple()
    {
        $this->assertTrue(!empty(Password::simple()), 'Empty string returned');
    }

    public function testStrong()
    {
        $this->assertTrue(!empty(Password::strong()), 'Empty string returned');
    }
}
