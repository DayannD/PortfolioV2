<?php

namespace App\Tests;

use App\Entity\Experience;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class ExperienceUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $experience = new Experience();
        $date = new DateTimeImmutable();

        $experience->setTitle("Title experience")
                   ->setTitleSpe("Title Spe")
                   ->setDescription("description")
                   ->setYearsStartAt($date)
                   ->setYearsEndAt($date);
                   
        $this->assertTrue($experience->getTitle() === "Title experience");
        $this->assertTrue($experience->getTitleSpe() === "Title Spe");
        $this->assertTrue($experience->getDescription() === "description");
        $this->assertTrue($experience->getYearsStartAt() === $date);
        $this->assertTrue($experience->getYearsEndAt() === $date);
    }

    public function testIsfalse(): void
    {
        $experience = new Experience();
        $date = new DateTimeImmutable();

        $experience->setTitle("Title experience")
                   ->setTitleSpe("Title Spe")
                   ->setDescription("description")
                   ->setYearsStartAt($date)
                   ->setYearsEndAt($date);
                   
        $this->assertfalse($experience->getTitle() === "false");
        $this->assertfalse($experience->getTitleSpe() === "false Spe");
        $this->assertfalse($experience->getDescription() === "false");
        $this->assertfalse($experience->getYearsStartAt() === '2000-12-50');
        $this->assertfalse($experience->getYearsEndAt() === '2000-12-50');
    }

    public function testIsempty(): void
    {
        $experience = new Experience();
                   
        $this->assertEmpty($experience->getTitle());
        $this->assertEmpty($experience->getTitleSpe());
        $this->assertEmpty($experience->getDescription());
        $this->assertEmpty($experience->getYearsStartAt());
        $this->assertEmpty($experience->getYearsEndAt());
    }
}
