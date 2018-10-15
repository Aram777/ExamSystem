<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionsRepository")
 */
class Questions
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
    private $qdescription;

    /**
     * @ORM\Column(type="smallint")
     */
    private $qcategory;

    /**
     * @ORM\Column(type="smallint")
     */
    private $qdifficultylevel;

    /**
     * @ORM\Column(type="integer")
     */
    private $userid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQdescription(): ?string
    {
        return $this->qdescription;
    }

    public function setQdescription(string $qdescription): self
    {
        $this->qdescription = $qdescription;

        return $this;
    }

    public function getQcategory(): ?int
    {
        return $this->qcategory;
    }

    public function setQcategory(int $qcategory): self
    {
        $this->qcategory = $qcategory;

        return $this;
    }

    public function getQdifficultylevel(): ?int
    {
        return $this->qdifficultylevel;
    }

    public function setQdifficultylevel(int $qdifficultylevel): self
    {
        $this->qdifficultylevel = $qdifficultylevel;

        return $this;
    }

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function setUserid(int $userid): self
    {
        $this->userid = $userid;

        return $this;
    }
}
