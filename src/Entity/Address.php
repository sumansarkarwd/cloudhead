<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\AddressRepository")
 */
class Address
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $a_name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $a_route;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $a_main_code;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $a_parent_code;

    public function getId()
    {
        return $this->id;
    }

    public function getAName(): ?string
    {
        return $this->a_name;
    }

    public function setAName(string $a_name): self
    {
        $this->a_name = $a_name;

        return $this;
    }

    public function getARoute(): ?string
    {
        return $this->a_route;
    }

    public function setARoute(string $a_route): self
    {
        $this->a_route = $a_route;

        return $this;
    }

    public function getAMainCode(): ?string
    {
        return $this->a_main_code;
    }

    public function setAMainCode(string $a_main_code): self
    {
        $this->a_main_code = $a_main_code;

        return $this;
    }

    public function getAParentCode(): ?string
    {
        return $this->a_parent_code;
    }

    public function setAParentCode(string $a_parent_code): self
    {
        $this->a_parent_code = $a_parent_code;

        return $this;
    }
    public function geta_name(): ?string{
        return $this->a_name;
    }
    public function geta_route(): ?string{
        return $this->a_name;
    }
    public function geta_main_code(): ?string{
        return $this->a_name;
    }
    public function geta_parent_code(): ?string{
        return $this->a_name;
    }
}
