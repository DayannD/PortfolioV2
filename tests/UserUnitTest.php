<?php

namespace App\Tests;

use App\Entity\User;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $user = new User();
        $date = new DateTimeImmutable();

        $user->setEmail("Email")
             ->setPassword("password");
                   
        $this->assertTrue($user->getEmail() === "Email");
        $this->assertTrue($user->getPassword() === "password");

    }

    public function testIsfalse(): void
    {
        $user = new User();
        $date = new DateTimeImmutable();

        $user->setEmail("Email")
             ->setPassword("password");
                   
        $this->assertfalse($user->getEmail() === "false");
        $this->assertfalse($user->GetPassword() === "false");
    }

    public function testIsempty(): void
    {
        $user = new User();
                   
        $this->assertEmpty($user->getEmail());
    }
}
