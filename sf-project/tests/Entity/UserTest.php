<?php

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testFirstName()
    {
        $user = new User;
        $value = 'User';
        $user->setFirstName($value);
        $this->assertEquals($value, $user->getFirstName());
    }
    public function testLastName()
    {
        $user = new User;
        $value = 'User';
        $user->setLastName($value);
        $this->assertEquals($value, $user->getLastName());
    }
}
