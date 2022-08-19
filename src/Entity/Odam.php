<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\OdamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OdamRepository::class)]
#[ApiResource]
class Odam
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Ismi = null;

    #[ORM\Column(length: 255)]
    private ?string $Familyasi = null;

    #[ORM\Column]
    private ?int $Yoshi = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsmi(): ?string
    {
        return $this->Ismi;
    }

    public function setIsmi(string $Ismi): self
    {
        $this->Ismi = $Ismi;

        return $this;
    }

    public function getFamilyasi(): ?string
    {
        return $this->Familyasi;
    }

    public function setFamilyasi(string $Familyasi): self
    {
        $this->Familyasi = $Familyasi;

        return $this;
    }

    public function getYoshi(): ?int
    {
        return $this->Yoshi;
    }

    public function setYoshi(int $Yoshi): self
    {
        $this->Yoshi = $Yoshi+10;

        return $this;
    }
}
