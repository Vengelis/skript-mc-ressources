<?php

namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Review
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="id")
     */
    private User $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Update", inversedBy="id")
     */
    private Update $update;

    /**
     * @ORM\Column(type="integer")
     */
    private int $rating;

    /**
     * @ORM\Column(type="text")
     */
    private string $content;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", mappedBy="id")
     */
    private Collection $likes;

    /**
     * @ORM\Column(type="date")
     */
    private DateTime $createdAt;

    public function __construct()
    {
        $this->content = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Review
     */
    public function setId(int $id): Review
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     * @return Review
     */
    public function setUser(User $user): Review
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return Update
     */
    public function getUpdate(): Update
    {
        return $this->update;
    }

    /**
     * @param Update $update
     * @return Review
     */
    public function setUpdate(Update $update): Review
    {
        $this->update = $update;
        return $this;
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     * @return Review
     */
    public function setRating(int $rating): Review
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return ArrayCollection|string
     */
    public function getContent(): ArrayCollection|string
    {
        return $this->content;
    }

    /**
     * @param ArrayCollection|string $content
     * @return Review
     */
    public function setContent(ArrayCollection|string $content): Review
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    /**
     * @param Collection $likes
     * @return Review
     */
    public function setLikes(Collection $likes): Review
    {
        $this->likes = $likes;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     * @return Review
     */
    public function setCreatedAt(DateTime $createdAt): Review
    {
        $this->createdAt = $createdAt;
        return $this;
    }

}