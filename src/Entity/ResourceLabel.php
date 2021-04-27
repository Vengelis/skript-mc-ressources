<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class ResourceLabel
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
     * @ORM\Column(type="string", length=255)
     */
    private string $bgColor;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $textColor;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $fontStyle = null;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ResourceLabel
     */
    public function setId(int $id): ResourceLabel
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
     * @return ResourceLabel
     */
    public function setName(string $name): ResourceLabel
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getBgColor(): string
    {
        return $this->bgColor;
    }

    /**
     * @param string $bgColor
     * @return ResourceLabel
     */
    public function setBgColor(string $bgColor): ResourceLabel
    {
        $this->bgColor = $bgColor;
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
     * @return ResourceLabel
     */
    public function setTextColor(string $textColor): ResourceLabel
    {
        $this->textColor = $textColor;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFontStyle(): ?string
    {
        return $this->fontStyle;
    }

    /**
     * @param string|null $fontStyle
     * @return ResourceLabel
     */
    public function setFontStyle(?string $fontStyle): ResourceLabel
    {
        $this->fontStyle = $fontStyle;
        return $this;
    }

}