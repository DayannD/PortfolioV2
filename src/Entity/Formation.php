<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormationRepository::class)]
class Formation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column(type: 'datetime_immutable')]
    private $yearsStartAt;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private $yearsEndAt;

    #[ORM\Column(type: 'string', length: 255)]
    private $sutdyGrade;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getYearsStartAt(): ?\DateTimeImmutable
    {
        return $this->yearsStartAt;
    }

    public function setYearsStartAt(\DateTimeImmutable $yearsStartAt): self
    {
        $this->yearsStartAt = $yearsStartAt;

        return $this;
    }

    public function getYearsEndAt(): ?\DateTimeImmutable
    {
        return $this->yearsEndAt;
    }

    public function setYearsEndAt(?\DateTimeImmutable $yearsEndAt): self
    {
        $this->yearsEndAt = $yearsEndAt;

        return $this;
    }

    public function getSutdyGrade(): ?string
    {
        return $this->sutdyGrade;
    }

    public function setSutdyGrade(string $sutdyGrade): self
    {
        $this->sutdyGrade = $sutdyGrade;

        return $this;
    }
}
