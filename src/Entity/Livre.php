<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\LivreRepository")
 */
class Livre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Actived;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Postere;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Auteur", inversedBy="livres")
     */
    private $Auteur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Genre", inversedBy="livres")
     */
    private $Genre;

    /**
     * @ORM\Column(type="date")
     */
    private $date_Publication;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Maison_Edition;

    /**
     * @ORM\Column(type="text")
     */
    private $Resumer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActived(): ?bool
    {
        return $this->Actived;
    }

    public function setActived(bool $Actived): self
    {
        $this->Actived = $Actived;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getPostere(): ?string
    {
        return $this->Postere;
    }

    public function setPostere(string $Postere): self
    {
        $this->Postere = $Postere;

        return $this;
    }

    public function getAuteur(): ?Auteur
    {
        return $this->Auteur;
    }

    public function setAuteur(?Auteur $Auteur): self
    {
        $this->Auteur = $Auteur;

        return $this;
    }

    public function getGenre(): ?Genre
    {
        return $this->Genre;
    }

    public function setGenre(?Genre $Genre): self
    {
        $this->Genre = $Genre;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->date_Publication;
    }

    public function setDatePublication(\DateTimeInterface $date_Publication): self
    {
        $this->date_Publication = $date_Publication;

        return $this;
    }

    public function getMaisonEdition(): ?string
    {
        return $this->Maison_Edition;
    }

    public function setMaisonEdition(string $Maison_Edition): self
    {
        $this->Maison_Edition = $Maison_Edition;

        return $this;
    }

    public function getResumer(): ?string
    {
        return $this->Resumer;
    }

    public function setResumer(string $Resumer): self
    {
        $this->Resumer = $Resumer;

        return $this;
    }
}
