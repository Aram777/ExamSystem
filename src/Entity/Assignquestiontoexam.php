<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AssignquestiontoexamRepository")
 */
class Assignquestiontoexam
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
     * @ORM\Column(type="integer")
     */
    private $examid;

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

    public function getExamid(): ?int
    {
        return $this->examid;
    }

    public function setExamid(int $examid): self
    {
        $this->examid = $examid;

        return $this;
    }
}
