<?php

namespace JamesRyanBell\Dinopass\Test;

use JamesRyanBell\Dinopass\Password;

class Test extends \PHPUnit_Framework_TestCase
{

    public function testSimple()
    {
    	$password = Password::simple();
        $this->assertTrue(!empty($password), 'Empty string returned');
    }

    public function testStrong()
    {
    	$password = Password::strong();
        $this->assertTrue(!empty($password), 'Empty string returned');
    }
}
