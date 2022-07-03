<?php

namespace App\Entity;

use App\Repository\FormulaireRepository;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: FormulaireRepository::class)]
class Formulaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank()]
    #[Assert\Length(min: 2, max: 30)]
    private string $Destination;

    #[ORM\Column(type: 'string', length: 50)]
    #[Assert\NotBlank()]
    #[Assert\Length(min: 2, max: 30)]
    private string $Client;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank()]
    private string $Raison;

    #[ORM\Column(type: 'date')]
    //#[Assert\NotNull()]
    private $DateDépart;

    #[ORM\Column(type: 'date')]
    //#[Assert\NotNull()]
    private $DateRetour;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDestination(): ?string
    {
        return $this->Destination;
    }

    public function setDestination(string $Destination): self
    {
        $this->Destination = $Destination;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->Client;
    }

    public function setClient(string $Client): self
    {
        $this->Client = $Client;

        return $this;
    }

    public function getRaison(): ?string
    {
        return $this->Raison;
    }

    public function setRaison(string $Raison): self
    {
        $this->Raison = $Raison;

        return $this;
    }

    public function getDateDépart(): ?\DateTimeInterface
    {
        return $this->DateDépart;
    }

    public function setDateDépart(\DateTimeInterface $DateDépart): self
    {
        $this->DateDépart = $DateDépart;

        return $this;
    }

    public function getDateRetour(): ?\DateTimeInterface
    {
        return $this->DateRetour;
    }

    public function setDateRetour(\DateTimeInterface $DateRetour): self
    {
        $this->DateRetour = $DateRetour;

        return $this;
    }
}
