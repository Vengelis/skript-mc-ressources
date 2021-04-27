<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SupportTicket
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SupportStatus", inversedBy="id")
     */
    private SupportStatus $supportStatus;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SupportLabel", inversedBy="id")
     */
    private SupportLabel $supportLabel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $title;

    /**
     * @ORM\Column(type="text")
     */
    private string $content;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Update", inversedBy="id")
     */
    private Update $update;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $assigned;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $visible;

    /**
     * @ORM\Column(type="date")
     */
    private DateTime $createdAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return SupportTicket
     */
    public function setId(int $id): SupportTicket
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return SupportStatus
     */
    public function getSupportStatus(): SupportStatus
    {
        return $this->supportStatus;
    }

    /**
     * @param SupportStatus $supportStatus
     * @return SupportTicket
     */
    public function setSupportStatus(SupportStatus $supportStatus): SupportTicket
    {
        $this->supportStatus = $supportStatus;
        return $this;
    }

    /**
     * @return SupportLabel
     */
    public function getSupportLabel(): SupportLabel
    {
        return $this->supportLabel;
    }

    /**
     * @param SupportLabel $supportLabel
     * @return SupportTicket
     */
    public function setSupportLabel(SupportLabel $supportLabel): SupportTicket
    {
        $this->supportLabel = $supportLabel;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return SupportTicket
     */
    public function setTitle(string $title): SupportTicket
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return SupportTicket
     */
    public function setContent(string $content): SupportTicket
    {
        $this->content = $content;
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
     * @return SupportTicket
     */
    public function setUpdate(Update $update): SupportTicket
    {
        $this->update = $update;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssigned(): string
    {
        return $this->assigned;
    }

    /**
     * @param string $assigned
     * @return SupportTicket
     */
    public function setAssigned(string $assigned): SupportTicket
    {
        $this->assigned = $assigned;
        return $this;
    }

    /**
     * @return bool
     */
    public function isVisible(): bool
    {
        return $this->visible;
    }

    /**
     * @param bool $visible
     * @return SupportTicket
     */
    public function setVisible(bool $visible): SupportTicket
    {
        $this->visible = $visible;
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
     * @return SupportTicket
     */
    public function setCreatedAt(DateTime $createdAt): SupportTicket
    {
        $this->createdAt = $createdAt;
        return $this;
    }

}