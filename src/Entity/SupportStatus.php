<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SupportStatus
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $name;

    /**
     * @ORM\Column(type="string", length=12)
     */
    private string $textColor;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $icon;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return SupportStatus
     */
    public function setId(int $id): SupportStatus
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return SupportStatus
     */
    public function setName(string $name): SupportStatus
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextColor(): string
    {
        return $this->textColor;
    }

    /**
     * @param string $textColor
     * @return SupportStatus
     */
    public function setTextColor(string $textColor): SupportStatus
    {
        $this->textColor = $textColor;
        return $this;
    }

    /**
     * @return string
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * @param string $icon
     * @return SupportStatus
     */
    public function setIcon(string $icon): SupportStatus
    {
        $this->icon = $icon;
        return $this;
    }

}