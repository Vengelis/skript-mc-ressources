<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class MinecraftVersion
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return MinecraftVersion
     */
    public function setId(int $id): MinecraftVersion
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
     * @return MinecraftVersion
     */
    public function setName(string $name): MinecraftVersion
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
     * @return MinecraftVersion
     */
    public function setDescription(string $description): MinecraftVersion
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
     * @return MinecraftVersion
     */
    public function setFontStyle(string $fontStyle): MinecraftVersion
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
     * @return MinecraftVersion
     */
    public function setIcon(string $icon): MinecraftVersion
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
     * @return MinecraftVersion
     */
    public function setUsable(bool $usable): MinecraftVersion
    {
        $this->usable = $usable;
        return $this;
    }

}