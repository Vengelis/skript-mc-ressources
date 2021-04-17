<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="integer", unique=true)
     */
    private int $invisionId;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private string $mail;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private string $username;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private string $forumProfileUrl;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private string $primaryGroupName;

    /**
     * @ORM\Column(type="array")
     */
    private array $roles = [];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvisionId(): int
    {
        return $this->invisionId;
    }

    /**
     * @param int $invisionId
     * @return User
     */
    public function setInvisionId(int $invisionId): self
    {
        $this->invisionId = $invisionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     * @return User
     */
    public function setMail(string $mail): self
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return User
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getForumProfileUrl(): string
    {
        return $this->forumProfileUrl;
    }

    /**
     * @param string $forumProfileUrl
     * @return User
     */
    public function setForumProfileUrl(string $forumProfileUrl): self
    {
        $this->forumProfileUrl = $forumProfileUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrimaryGroupName(): string
    {
        return $this->primaryGroupName;
    }

    /**
     * @param string $primaryGroupName
     * @return User
     */
    public function setPrimaryGroupName(string $primaryGroupName): self
    {
        $this->primaryGroupName = $primaryGroupName;
        return $this;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @param array $roles
     * @return User
     */
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    public function getPassword(): ?string
    {
        return null;
    }

    public function getSalt(): ?string
    {
        return null;
    }

    public function eraseCredentials(): void
    {
    }
}