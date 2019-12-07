<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionListRepository")
 */
class QuestionList
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array")
     */
    private $Question = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?array
    {
        return $this->Question;
    }

    public function setQuestion(array $Question): self
    {
        $this->Question = $Question;

        return $this;
    }
}
