<?php

namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Resource
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ReleaseLabel", inversedBy="id")
     */
    private ResourceLabel $resourceLabel;

    /**
     * @ORM\Column(type="text")
     */
    private string $icon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $description = null;

    /**
     * @ORM\Column(type="text")
     */
    private string $content;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="id")
     */
    private Category $category;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="id")
     */
    private User $user;

    /**
     * @ORM\Column(type="date")
     */
    private DateTime $createdAt;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\SkriptVersion", mappedBy="id")
     */
    private Collection $skriptVersions;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\MinecraftVersion", mappedBy="id")
     */
    private Collection $minecraftVersions;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $wiki;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $discordInvite;

    /**
     * @ORM\Column(type="text")
     */
    private string $contributors;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $githubWebhook = null;

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $visible;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", mappedBy="id")
     */
    private Collection $likes;

    public function __construct()
    {
        $this->skriptVersions = new ArrayCollection();
        $this->minecraftVersions = new ArrayCollection();
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
     * @return Resource
     */
    public function setId(int $id): Resource
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return ResourceLabel
     */
    public function getResourceLabel(): ResourceLabel
    {
        return $this->resourceLabel;
    }

    /**
     * @param ResourceLabel $resourceLabel
     * @return Resource
     */
    public function setResourceLabel(ResourceLabel $resourceLabel): Resource
    {
        $this->resourceLabel = $resourceLabel;
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
     * @return Resource
     */
    public function setIcon(string $icon): Resource
    {
        $this->icon = $icon;
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
     * @return Resource
     */
    public function setTitle(string $title): Resource
    {
        $this->title = $title;
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
     * @return Resource
     */
    public function setDescription(?string $description): Resource
    {
        $this->description = $description;
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
     * @return Resource
     */
    public function setContent(string $content): Resource
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @param Category $category
     * @return Resource
     */
    public function setCategory(Category $category): Resource
    {
        $this->category = $category;
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
     * @return Resource
     */
    public function setUser(User $user): Resource
    {
        $this->user = $user;
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
     * @return Resource
     */
    public function setCreatedAt(DateTime $createdAt): Resource
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return ArrayCollection|Collection
     */
    public function getSkriptVersions(): ArrayCollection|Collection
    {
        return $this->skriptVersions;
    }

    /**
     * @param ArrayCollection|Collection $skriptVersions
     * @return Resource
     */
    public function setSkriptVersions(ArrayCollection|Collection $skriptVersions): Resource
    {
        $this->skriptVersions = $skriptVersions;
        return $this;
    }

    /**
     * @return ArrayCollection|Collection
     */
    public function getMinecraftVersions(): ArrayCollection|Collection
    {
        return $this->minecraftVersions;
    }

    /**
     * @param ArrayCollection|Collection $minecraftVersions
     * @return Resource
     */
    public function setMinecraftVersions(ArrayCollection|Collection $minecraftVersions): Resource
    {
        $this->minecraftVersions = $minecraftVersions;
        return $this;
    }

    /**
     * @return string
     */
    public function getWiki(): string
    {
        return $this->wiki;
    }

    /**
     * @param string $wiki
     * @return Resource
     */
    public function setWiki(string $wiki): Resource
    {
        $this->wiki = $wiki;
        return $this;
    }

    /**
     * @return string
     */
    public function getDiscordInvite(): string
    {
        return $this->discordInvite;
    }

    /**
     * @param string $discordInvite
     * @return Resource
     */
    public function setDiscordInvite(string $discordInvite): Resource
    {
        $this->discordInvite = $discordInvite;
        return $this;
    }

    /**
     * @return string
     */
    public function getContributors(): string
    {
        return $this->contributors;
    }

    /**
     * @param string $contributors
     * @return Resource
     */
    public function setContributors(string $contributors): Resource
    {
        $this->contributors = $contributors;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getGithubWebhook(): ?string
    {
        return $this->githubWebhook;
    }

    /**
     * @param string|null $githubWebhook
     * @return Resource
     */
    public function setGithubWebhook(?string $githubWebhook): Resource
    {
        $this->githubWebhook = $githubWebhook;
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
     * @return Resource
     */
    public function setVisible(bool $visible): Resource
    {
        $this->visible = $visible;
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
     * @return Resource
     */
    public function setLikes(ArrayCollection|Collection $likes): Resource
    {
        $this->likes = $likes;
        return $this;
    }

}