<?php

namespace App\Entity;

use App\Repository\MangaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MangaRepository::class)
 */
class Manga
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_manga;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $couverture;

    /**
     * @ORM\ManyToOne(targetEntity=Dessinateur::class)
     * @ORM\JoinColumn(name="id_dessinateur", referencedColumnName="id_dessinateur")
     */
    private $dessinateur;

    /**
     * @ORM\ManyToOne(targetEntity=Scenariste::class)
     * @ORM\JoinColumn(name="id_scenariste", referencedColumnName="id_scenariste")
     */
    private $scenariste;

    /**
     * @ORM\ManyToOne(targetEntity=Genre::class)
     * @ORM\JoinColumn(name="id_genre", referencedColumnName="id_genre")
     */
    private $genre;

    public function getId(): ?int
    {
        return $this->id_manga;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCouverture(): ?string
    {
        return $this->couverture;
    }

    public function setCouverture(?string $couverture): self
    {
        $this->couverture = $couverture;

        return $this;
    }

    public function getDessinateur(): ?Dessinateur
    {
        return $this->dessinateur;
    }

    public function setDessinateur(?Dessinateur $dessinateur): self
    {
        $this->dessinateur = $dessinateur;

        return $this;
    }

    public function getScenariste(): ?Scenariste
    {
        return $this->scenariste;
    }

    public function setScenariste(?Scenariste $scenariste): self
    {
        $this->scenariste = $scenariste;

        return $this;
    }

    public function getGenre(): ?Genre
    {
        return $this->genre;
    }

    public function setGenre(?Genre $genre): self
    {
        $this->genre = $genre;

        return $this;
    }
}
