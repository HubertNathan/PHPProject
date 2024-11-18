<?php

namespace App\Entity;

use App\Repository\StarshipRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StarshipRepository::class)]
class Starship
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'starships')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Agency $agency = null;

    /**
     * @var Collection<int, Hangar>
     */
    #[ORM\ManyToMany(targetEntity: Hangar::class, mappedBy: 'starships')]
    private Collection $hangars;

    public function __construct()
    {
        $this->hangars = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getAgency(): ?Agency
    {
        return $this->agency;
    }

    public function setAgency(?Agency $agency): static
    {
        $this->agency = $agency;

        return $this;
    }

    /**
     * @return Collection<int, Hangar>
     */
    public function getHangars(): Collection
    {
        return $this->hangars;
    }

    public function addHangar(Hangar $hangar): static
    {
        if (!$this->hangars->contains($hangar)) {
            $this->hangars->add($hangar);
            $hangar->addStarship($this);
        }

        return $this;
    }

    public function removeHangar(Hangar $hangar): static
    {
        if ($this->hangars->removeElement($hangar)) {
            $hangar->removeStarship($this);
        }

        return $this;
    }
}
