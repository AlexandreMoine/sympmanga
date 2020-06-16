<?php

namespace App\Entity;

use App\Repository\ScenaristeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScenaristeRepository::class)
 */
class Scenariste
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_scenariste;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nom_scenariste;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prenom_scenariste;

    public function getId(): ?int
    {
        return $this->id_scenariste;
    }

    public function getNomScenariste(): ?string
    {
        return $this->nom_scenariste;
    }

    public function setNomScenariste(?string $nom_scenariste): self
    {
        $this->nom_scenariste = $nom_scenariste;

        return $this;
    }

    public function getPrenomScenariste(): ?string
    {
        return $this->prenom_scenariste;
    }

    public function setPrenomScenariste(?string $prenom_scenariste): self
    {
        $this->prenom_scenariste = $prenom_scenariste;

        return $this;
    }
}
