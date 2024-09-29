<?php

namespace App\Entity;

use App\Repository\AgencyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AgencyRepository::class)]
class Agency
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $location = null;

    /**
     * @var Collection<int, Starship>
     */
    #[ORM\OneToMany(targetEntity: Starship::class, mappedBy: 'agency', orphanRemoval: true)]
    private Collection $starships;

    public function __construct()
    {
        $this->starships = new ArrayCollection();
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

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): static
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return Collection<int, Starship>
     */
    public function getStarships(): Collection
    {
        return $this->starships;
    }

    public function addStarship(Starship $starship): static
    {
        if (!$this->starships->contains($starship)) {
            $this->starships->add($starship);
            $starship->setAgency($this);
        }

        return $this;
    }

    public function removeStarship(Starship $starship): static
    {
        if ($this->starships->removeElement($starship)) {
            // set the owning side to null (unless already changed)
            if ($starship->getAgency() === $this) {
                $starship->setAgency(null);
            }
        }

        return $this;
    }
}
