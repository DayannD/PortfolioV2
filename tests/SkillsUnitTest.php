<?php

namespace App\Tests;

use App\Entity\Skills;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class SkillsUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $Skills = new Skills();
        $date = new DateTimeImmutable();

        $Skills->setTitle("Title Skills")
                   ->setDescription("description");
                   
        $this->assertTrue($Skills->getTitle() === "Title Skills");
        $this->assertTrue($Skills->getDescription() === "description");

    }

    public function testIsfalse(): void
    {
        $Skills = new Skills();
        $date = new DateTimeImmutable();

        $Skills->setTitle("Title Skills")
                   ->setDescription("description");
                   
        $this->assertfalse($Skills->getTitle() === "false");
        $this->assertfalse($Skills->getDescription() === "false");
    }

    public function testIsempty(): void
    {
        $Skills = new Skills();
                   
        $this->assertEmpty($Skills->getTitle());
        $this->assertEmpty($Skills->getDescription());
    }
}
