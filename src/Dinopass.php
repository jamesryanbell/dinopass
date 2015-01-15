<?php

namespace JamesRyanBell;

class Dinopass
{
    public function strong() {
        return trim(file_get_contents('http://www.dinopass.com/password/strong'));
    }

    public function simple() {
        return trim(file_get_contents('http://www.dinopass.com/password/simple'));
    }
}
