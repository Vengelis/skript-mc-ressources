<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="parent")
     * @ORM\JoinColumn(nullable=true)
     */
    private ?Category $parent = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $description = null;

    /**
     * @ORM\Column(type="json")
     */
    private string $viewPermissions;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $visible;

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
     * @return Category
     */
    public function setId(int $id): Category
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Category|null
     */
    public function getParent(): ?Category
    {
        return $this->parent;
    }

    /**
     * @param Category|null $parent
     * @return Category
     */
    public function setParent(?Category $parent): Category
    {
        $this->parent = $parent;
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
     * @return Category
     */
    public function setName(string $name): Category
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return Category
     */
    public function setDescription(?string $description): Category
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getViewPermissions(): string
    {
        return $this->viewPermissions;
    }

    /**
     * @param string $viewPermissions
     * @return Category
     */
    public function setViewPermissions(string $viewPermissions): Category
    {
        $this->viewPermissions = $viewPermissions;
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
     * @return Category
     */
    public function setVisible(bool $visible): Category
    {
        $this->visible = $visible;
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
     * @return Category
     */
    public function setUsable(bool $usable): Category
    {
        $this->usable = $usable;
        return $this;
    }

}