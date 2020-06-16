<?php

namespace App\Entity;

use App\Repository\GenreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GenreRepository::class)
 */
class Genre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_genre;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $lib_genre;

    public function getId(): ?int
    {
        return $this->id_genre;
    }

    public function getLibGenre(): ?string
    {
        return $this->lib_genre;
    }

    public function setLibGenre(?string $lib_genre): self
    {
        $this->lib_genre = $lib_genre;

        return $this;
    }
}
