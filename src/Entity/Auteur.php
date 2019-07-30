<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\AuteurRepository")
 */
class Auteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom_Complet;

    /**
     * @ORM\Column(type="date")
     */
    private $date_Naissance;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_Deces;

    /**
     * @ORM\Column(type="text")
     */
    private $Biographie;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Nationalit", inversedBy="auteurs")
     */
    private $Nationalite;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Livre", mappedBy="Auteur")
     */
    private $livres;

    public function __construct()
    {
        $this->Nationalite = new ArrayCollection();
        $this->livres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomComplet(): ?string
    {
        return $this->Nom_Complet;
    }

    public function setNomComplet(string $Nom_Complet): self
    {
        $this->Nom_Complet = $Nom_Complet;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_Naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_Naissance): self
    {
        $this->date_Naissance = $date_Naissance;

        return $this;
    }

    public function getDateDeces(): ?\DateTimeInterface
    {
        return $this->date_Deces;
    }

    public function setDateDeces(?\DateTimeInterface $date_Deces): self
    {
        $this->date_Deces = $date_Deces;

        return $this;
    }

    public function getBiographie(): ?string
    {
        return $this->Biographie;
    }

    public function setBiographie(string $Biographie): self
    {
        $this->Biographie = $Biographie;

        return $this;
    }

    /**
     * @return Collection|Nationalit[]
     */
    public function getNationalite(): Collection
    {
        return $this->Nationalite;
    }

    public function addNationalite(Nationalit $nationalite): self
    {
        if (!$this->Nationalite->contains($nationalite)) {
            $this->Nationalite[] = $nationalite;
        }

        return $this;
    }

    public function removeNationalite(Nationalit $nationalite): self
    {
        if ($this->Nationalite->contains($nationalite)) {
            $this->Nationalite->removeElement($nationalite);
        }

        return $this;
    }

    /**
     * @return Collection|Livre[]
     */
    public function getLivres(): Collection
    {
        return $this->livres;
    }

    public function addLivre(Livre $livre): self
    {
        if (!$this->livres->contains($livre)) {
            $this->livres[] = $livre;
            $livre->setAuteur($this);
        }

        return $this;
    }

    public function removeLivre(Livre $livre): self
    {
        if ($this->livres->contains($livre)) {
            $this->livres->removeElement($livre);
            // set the owning side to null (unless already changed)
            if ($livre->getAuteur() === $this) {
                $livre->setAuteur(null);
            }
        }

        return $this;
    }
    public function __toString() {
    return $this->Nom_Complet;
}
}
