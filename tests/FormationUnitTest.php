<?php

namespace App\Tests;

use App\Entity\Formation;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class FormationUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $formation = new Formation();
        $date = new DateTimeImmutable();

        $formation->setTitle("Title formation")
                   ->setDescription("description")
                   ->setYearsStartAt($date)
                   ->setYearsEndAt($date)
                   ->setSutdyGrade("3");
                   
        $this->assertTrue($formation->getTitle() === "Title formation");
        $this->assertTrue($formation->getDescription() === "description");
        $this->assertTrue($formation->getYearsStartAt() === $date);
        $this->assertTrue($formation->getYearsEndAt() === $date);
        $this->assertTrue($formation->getSutdyGrade() === "3");
    }

    public function testIsfalse(): void
    {
        $formation = new Formation();
        $date = new DateTimeImmutable();

        $formation->setTitle("Title formation")
                   ->setDescription("description")
                   ->setYearsStartAt($date)
                   ->setYearsEndAt($date)
                   ->setSutdyGrade("3");
                   
        $this->assertfalse($formation->getTitle() === "false");
        $this->assertfalse($formation->getDescription() === "false");
        $this->assertfalse($formation->getYearsStartAt() === '2000-12-50');
        $this->assertfalse($formation->getYearsEndAt() === '2000-12-50');
        $this->assertfalse($formation->getSutdyGrade() === "false");
    }

    public function testIsempty(): void
    {
        $formation = new Formation();
                   
        $this->assertEmpty($formation->getTitle());
        $this->assertEmpty($formation->getDescription());
        $this->assertEmpty($formation->getYearsStartAt());
        $this->assertEmpty($formation->getYearsEndAt());
        $this->assertEmpty($formation->getSutdyGrade());
    }
}