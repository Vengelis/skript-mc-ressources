<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SupportReply
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="integer")
     */
    private int $type;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SupportTicket", inversedBy="id")
     */
    private SupportTicket $parent;

    /**
     * @ORM\Column(type="integer")
     */
    private int $position;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="id")
     */
    private User $user;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $content = null;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\SupportLabel", mappedBy="id")
     */
    private Collection $labels;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", mappedBy="id")
     */
    private Collection $likes;

    public function __construct()
    {
        $this->labels = new ArrayCollection();
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
     * @return SupportReply
     */
    public function setId(int $id): SupportReply
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return SupportReply
     */
    public function setType(int $type): SupportReply
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return SupportTicket
     */
    public function getParent(): SupportTicket
    {
        return $this->parent;
    }

    /**
     * @param SupportTicket $parent
     * @return SupportReply
     */
    public function setParent(SupportTicket $parent): SupportReply
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     * @return SupportReply
     */
    public function setPosition(int $position): SupportReply
    {
        $this->position = $position;
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
     * @return SupportReply
     */
    public function setUser(User $user): SupportReply
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     * @return SupportReply
     */
    public function setContent(?string $content): SupportReply
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return ArrayCollection|Collection
     */
    public function getLabels(): ArrayCollection|Collection
    {
        return $this->labels;
    }

    /**
     * @param ArrayCollection|Collection $labels
     * @return SupportReply
     */
    public function setLabels(ArrayCollection|Collection $labels): SupportReply
    {
        $this->labels = $labels;
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
     * @return SupportReply
     */
    public function setLikes(Collection $likes): SupportReply
    {
        $this->likes = $likes;
        return $this;
    }

}