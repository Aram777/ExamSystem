<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EduUsersRepository")
 */
class EduUsers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uEmail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $uPassword;

    /**
     * @ORM\Column(type="boolean")
     */
    private $uType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUName(): ?string
    {
        return $this->uName;
    }

    public function setUName(string $uName): self
    {
        $this->uName = $uName;

        return $this;
    }

    public function getUEmail(): ?string
    {
        return $this->uEmail;
    }

    public function setUEmail(string $uEmail): self
    {
        $this->uEmail = $uEmail;

        return $this;
    }

    public function getUPassword(): ?string
    {
        return $this->uPassword;
    }

    public function setUPassword(string $uPassword): self
    {
        $this->uPassword = $uPassword;

        return $this;
    }

    public function getUType(): ?bool
    {
        return $this->uType;
    }

    public function setUType(bool $uType): self
    {
        $this->uType = $uType;

        return $this;
    }
}
