<?php

namespace App\Tests;

use App\Entity\Project;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class ProjectUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $Project = new Project();
        $date = new DateTimeImmutable();

        $Project->setTitle("Title Project")
                   ->setDescription("description")
                   ->setLink("description");
                   
        $this->assertTrue($Project->getTitle() === "Title Project");
        $this->assertTrue($Project->getDescription() === "description");
        $this->assertTrue($Project->getLink() === "description");

    }

    public function testIsfalse(): void
    {
        $Project = new Project();
        $date = new DateTimeImmutable();

        $Project->setTitle("Title Project")
                   ->setDescription("description")
                   ->setLink("description");
                   
        $this->assertfalse($Project->getTitle() === "false");
        $this->assertfalse($Project->getDescription() === "false");
        $this->assertfalse($Project->getLink() === "false");
    }

    public function testIsempty(): void
    {
        $Project = new Project();
                   
        $this->assertEmpty($Project->getTitle());
        $this->assertEmpty($Project->getDescription());
        $this->assertEmpty($Project->getLink());
    }
}
