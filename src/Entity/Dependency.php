<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Dependency
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
     * @ORM\Column(type="text")
     */
    private string $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $fontStyle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $icon;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $usable;

    /**
     * @ORM\Column(type="string")
     */
    private string $link;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Dependency
     */
    public function setId(int $id): Dependency
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
     * @return Dependency
     */
    public function setName(string $name): Dependency
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Dependency
     */
    public function setDescription(string $description): Dependency
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getFontStyle(): string
    {
        return $this->fontStyle;
    }

    /**
     * @param string $fontStyle
     * @return Dependency
     */
    public function setFontStyle(string $fontStyle): Dependency
    {
        $this->fontStyle = $fontStyle;
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
     * @return Dependency
     */
    public function setIcon(string $icon): Dependency
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUsable(): bool
    {
        return $this->usable;
    }

    /**
     * @param bool $usable
     * @return Dependency
     */
    public function setUsable(bool $usable): Dependency
    {
        $this->usable = $usable;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return Dependency
     */
    public function setLink(string $link): Dependency
    {
        $this->link = $link;
        return $this;
    }

}