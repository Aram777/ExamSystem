<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnswersRepository")
 */
class Answers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $questionid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ansdescription;

    /**
     * @ORM\Column(type="boolean")
     */
    private $iscorrect;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestionid(): ?int
    {
        return $this->questionid;
    }

    public function setQuestionid(int $questionid): self
    {
        $this->questionid = $questionid;

        return $this;
    }

    public function getAnsdescription(): ?string
    {
        return $this->ansdescription;
    }

    public function setAnsdescription(string $ansdescription): self
    {
        $this->ansdescription = $ansdescription;

        return $this;
    }

    public function getIscorrect(): ?bool
    {
        return $this->iscorrect;
    }

    public function setIscorrect(bool $iscorrect): self
    {
        $this->iscorrect = $iscorrect;

        return $this;
    }
}
