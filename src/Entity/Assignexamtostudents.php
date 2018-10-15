<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AssignexamtostudentsRepository")
 */
class Assignexamtostudents
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
    private $examid;

    /**
     * @ORM\Column(type="integer")
     */
    private $studentid;

    /**
     * @ORM\Column(type="datetime")
     */
    private $assigndate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startrange;

    /**
     * @ORM\Column(type="datetime")
     */
    private $endrange;

    /**
     * @ORM\Column(type="datetime")
     */
    private $selecteddate;

    /**
     * @ORM\Column(type="time")
     */
    private $selectedtime;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isconfirmed;

    /**
     * @ORM\Column(type="integer")
     */
    private $result;

    /**
     * @ORM\Column(type="boolean")
     */
    private $showtostudent;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getStudentid(): ?int
    {
        return $this->studentid;
    }

    public function setStudentid(int $studentid): self
    {
        $this->studentid = $studentid;

        return $this;
    }

    public function getAssigndate(): ?\DateTimeInterface
    {
        return $this->assigndate;
    }

    public function setAssigndate(\DateTimeInterface $assigndate): self
    {
        $this->assigndate = $assigndate;

        return $this;
    }

    public function getStartrange(): ?\DateTimeInterface
    {
        return $this->startrange;
    }

    public function setStartrange(\DateTimeInterface $startrange): self
    {
        $this->startrange = $startrange;

        return $this;
    }

    public function getEndrange(): ?\DateTimeInterface
    {
        return $this->endrange;
    }

    public function setEndrange(\DateTimeInterface $endrange): self
    {
        $this->endrange = $endrange;

        return $this;
    }

    public function getSelecteddate(): ?\DateTimeInterface
    {
        return $this->selecteddate;
    }

    public function setSelecteddate(\DateTimeInterface $selecteddate): self
    {
        $this->selecteddate = $selecteddate;

        return $this;
    }

    public function getSelectedtime(): ?\DateTimeInterface
    {
        return $this->selectedtime;
    }

    public function setSelectedtime(\DateTimeInterface $selectedtime): self
    {
        $this->selectedtime = $selectedtime;

        return $this;
    }

    public function getIsconfirmed(): ?bool
    {
        return $this->isconfirmed;
    }

    public function setIsconfirmed(bool $isconfirmed): self
    {
        $this->isconfirmed = $isconfirmed;

        return $this;
    }

    public function getResult(): ?int
    {
        return $this->result;
    }

    public function setResult(int $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getShowtostudent(): ?bool
    {
        return $this->showtostudent;
    }

    public function setShowtostudent(bool $showtostudent): self
    {
        $this->showtostudent = $showtostudent;

        return $this;
    }
}
