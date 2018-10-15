<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TestRepository")
 */
class Test
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
    private $t1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $t2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getT1(): ?string
    {
        return $this->t1;
    }

    public function setT1(string $t1): self
    {
        $this->t1 = $t1;

        return $this;
    }

    public function getT2(): ?string
    {
        return $this->t2;
    }

    public function setT2(string $t2): self
    {
        $this->t2 = $t2;

        return $this;
    }
}
