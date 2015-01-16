<?php

namespace JamesRyanBell\Dinopass\Test;

use JamesRyanBell\Dinopass\Password;

class Test extends \PHPUnit_Framework_TestCase
{

    public function testSimple()
    {
    	$dinopass = new Password();
    	$password = $dinopass->simple();
        $this->assertTrue(!empty($password), 'Empty string returned');
    }

    public function testStrong()
    {
    	$dinopass = new Password();
    	$password = $dinopass->strong();
        $this->assertTrue(!empty($password), 'Empty string returned');
    }
}
