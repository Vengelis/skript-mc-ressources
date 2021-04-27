<?php

namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Update
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Resource", mappedBy="id")
     */
    private Resource $resource;

    /**
     * @ORM\Column(type="integer")
     */
    private int $position;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $title;

    /**
     * @ORM\Column(type="text")
     */
    private string $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $version;

    /**
     * @ORM\Column(type="text")
     */
    private string $downloadLink;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", mappedBy="id")
     */
    private Collection $downloads;

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
        $this->downloads = new ArrayCollection();
        $this->likes = new ArrayCollection();
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
     * @return Update
     */
    public function setId(int $id): Update
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Resource
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @param Resource $resource
     * @return Update
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
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
     * @return Update
     */
    public function setPosition(int $position): Update
    {
        $this->position = $position;
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
     * @return Update
     */
    public function setTitle(string $title): Update
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
     * @return Update
     */
    public function setContent(string $content): Update
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return Update
     */
    public function setVersion(string $version): Update
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return string
     */
    public function getDownloadLink(): string
    {
        return $this->downloadLink;
    }

    /**
     * @param string $downloadLink
     * @return Update
     */
    public function setDownloadLink(string $downloadLink): Update
    {
        $this->downloadLink = $downloadLink;
        return $this;
    }

    /**
     * @return ArrayCollection|Collection
     */
    public function getDownloads(): ArrayCollection|Collection
    {
        return $this->downloads;
    }

    /**
     * @param ArrayCollection|Collection $downloads
     * @return Update
     */
    public function setDownloads(ArrayCollection|Collection $downloads): Update
    {
        $this->downloads = $downloads;
        return $this;
    }

    /**
     * @return ArrayCollection|Collection
     */
    public function getLikes(): ArrayCollection|Collection
    {
        return $this->likes;
    }

    /**
     * @param ArrayCollection|Collection $likes
     * @return Update
     */
    public function setLikes(ArrayCollection|Collection $likes): Update
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
     * @return Update
     */
    public function setCreatedAt(DateTime $createdAt): Update
    {
        $this->createdAt = $createdAt;
        return $this;
    }

}