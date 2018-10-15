<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExamsRepository")
 */
class Exams
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     */
    private $category;

    /**
     * @ORM\Column(type="integer")
     */
    private $Teacherid;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Createddate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $canchange;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function setCategory(int $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getTeacherid(): ?int
    {
        return $this->Teacherid;
    }

    public function setTeacherid(int $Teacherid): self
    {
        $this->Teacherid = $Teacherid;

        return $this;
    }

    public function getCreateddate(): ?\DateTimeInterface
    {
        return $this->Createddate;
    }

    public function setCreateddate(\DateTimeInterface $Createddate): self
    {
        $this->Createddate = $Createddate;

        return $this;
    }

    public function getCanchange(): ?bool
    {
        return $this->canchange;
    }

    public function setCanchange(bool $canchange): self
    {
        $this->canchange = $canchange;

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
}
